using Academy.Controllers;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using PagedList;
using Academy.Models;
using System.IO;
using System.Data;
using Newtonsoft.Json.Linq;
using Newtonsoft.Json;

namespace Academy.Areas.Sysmgr.Controllers
{
    public class BannerController : BaseController
    {
        // GET: /Sysmgr/Banner/Index
        public ActionResult Index(int page = 1, string status = "", string ordery = "", string menu = "")
        {
            var data = db.Banners.AsQueryable();

            // 按 menu 筛选（如果传入且能解析为整数）
            if (!string.IsNullOrEmpty(menu) && int.TryParse(menu, out int menuValue))
            {
                data = data.Where(b => b.Menu == menuValue);
            }

            // 按状态筛选
            if (!string.IsNullOrEmpty(status) && int.TryParse(status, out int nstatus))
            {
                data = data.Where(a => a.Status == nstatus);
            }

            // 排序
            switch (ordery)
            {
                case "timeasc":
                    data = data.OrderBy(a => a.CDate);
                    break;
                case "timedesc":
                    data = data.OrderByDescending(a => a.CDate);
                    break;
                case "sortasc":
                    data = data.OrderBy(a => a.Sort);
                    break;
                case "sortdesc":
                    data = data.OrderByDescending(a => a.Sort);
                    break;
                default:
                    data = data.OrderByDescending(a => a.Sort).ThenByDescending(a => a.CDate);
                    break;
            }

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 12);
            ViewBag.Menu = menu;   // 传递到视图，用于生成后续链接
            return View(pagedData);
        }

        // GET: /Sysmgr/Banner/Add
        public ActionResult Add(string menu = "")
        {
            ViewBag.Menu = menu;
            return View();
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Add(Banner model, HttpPostedFileBase file, string menu = "")
        {
            // 处理文件上传
            if (file != null && file.FileName.LastIndexOf(".") > 0)
            {
                string ext = Path.GetExtension(file.FileName).ToLower().TrimStart('.');
                string[] allowed = { "jpg", "jpeg", "png", "gif", "bmp" };
                if (!allowed.Contains(ext))
                {
                    ModelState.AddModelError("", "請選擇縮略圖(僅支持jpg|jpeg|png|gif|bmp格式)!");
                }
                else
                {
                    string fileName = DateTime.Now.ToString("yyyyMMddHHmmss") + "_" + Guid.NewGuid().ToString() + "." + ext;
                    string virtualPath = "/Upload/Home/" + fileName;
                    string physicalPath = Server.MapPath("~" + virtualPath);
                    string dir = Path.GetDirectoryName(physicalPath);
                    if (!Directory.Exists(dir)) Directory.CreateDirectory(dir);
                    file.SaveAs(physicalPath);
                    model.Photo = virtualPath;
                }
            }
            else
            {
                ModelState.AddModelError("", "請選擇電腦主圖!");
            }

            // 保存 menu 参数到数据库
            if (!string.IsNullOrEmpty(menu) && int.TryParse(menu, out int menuValue))
            {
                model.Menu = menuValue;
            }
            else
            {
                model.Menu = 0;   // 默认值
            }

            if (ModelState.IsValid)
            {
                try
                {
                    model.Sort = (db.Banners.Max(a => a.Sort) ?? 0) + 1;
                    model.CUser = this.LoginUser.ID;
                    model.CDate = DateTime.Now;
                    db.Banners.Add(model);
                    db.SaveChanges();

                    return RedirectToAction("Index", new { menu = menu, success = true });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View(model);
                }
            }
            else
            {
                return View(model);
            }
        }

        // GET: /Sysmgr/Banner/Edit
        public ActionResult Edit(int id, string menu = "")
        {
            Banner model = db.Banners.FirstOrDefault(p => p.ID == id);
            if (model == null)
            {
                return RedirectToAction("Index", new { menu = menu });
            }
            ViewBag.Menu = menu;
            return View(model);
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(Banner model, HttpPostedFileBase file, string menu = "")
        {
            bool hasNewFile = false;
            // 处理新文件上传
            if (file != null && file.FileName.LastIndexOf(".") > 0)
            {
                string ext = Path.GetExtension(file.FileName).ToLower().TrimStart('.');
                string[] allowed = { "jpg", "jpeg", "png", "gif", "bmp" };
                if (!allowed.Contains(ext))
                {
                    ModelState.AddModelError("", "請選擇縮略圖(僅支持jpg|jpeg|png|gif|bmp格式)!");
                }
                else
                {
                    // 删除旧文件（如果存在）
                    var old = db.Banners.AsNoTracking().FirstOrDefault(b => b.ID == model.ID);
                    if (old != null && !string.IsNullOrEmpty(old.Photo) && System.IO.File.Exists(Server.MapPath(old.Photo)))
                    {
                        System.IO.File.Delete(Server.MapPath(old.Photo));
                    }
                    string fileName = DateTime.Now.ToString("yyyyMMddHHmmss") + "_" + Guid.NewGuid().ToString() + "." + ext;
                    string virtualPath = "/Upload/Home/" + fileName;
                    string physicalPath = Server.MapPath("~" + virtualPath);
                    string dir = Path.GetDirectoryName(physicalPath);
                    if (!Directory.Exists(dir)) Directory.CreateDirectory(dir);
                    file.SaveAs(physicalPath);
                    model.Photo = virtualPath;
                    hasNewFile = true;
                }
            }

            // 处理图片删除标记
            bool needDelete = Request["delimg"] == "1";
            if (needDelete && !hasNewFile)
            {
                var old = db.Banners.AsNoTracking().FirstOrDefault(b => b.ID == model.ID);
                if (old != null && !string.IsNullOrEmpty(old.Photo) && System.IO.File.Exists(Server.MapPath(old.Photo)))
                {
                    System.IO.File.Delete(Server.MapPath(old.Photo));
                }
                model.Photo = null;
            }

            if (ModelState.IsValid)
            {
                try
                {
                    var oldEntity = db.Banners.AsNoTracking().FirstOrDefault(b => b.ID == model.ID);
                    if (oldEntity == null) return HttpNotFound();

                    // 保留不可变字段
                    model.ReadCount = oldEntity.ReadCount;
                    model.Sort = oldEntity.Sort;
                    model.CUser = oldEntity.CUser;
                    model.CDate = oldEntity.CDate;
                    if (!hasNewFile && !needDelete)
                    {
                        // 没有更新图片也没有删除，保留原图路径
                        model.Photo = oldEntity.Photo;
                    }

                    // 更新 menu（来自请求参数）
                    if (!string.IsNullOrEmpty(menu) && int.TryParse(menu, out int menuValue))
                    {
                        model.Menu = menuValue;
                    }
                    else
                    {
                        model.Menu = oldEntity.Menu; // 保留原值或设为0
                    }

                    model.LUser = this.LoginUser.ID;
                    model.LDate = DateTime.Now;

                    db.Entry(model).State = EntityState.Modified;
                    db.SaveChanges();

                    // 处理返回地址
                    if (Session["ret"] != null)
                    {
                        Response.Redirect(Session["ret"].ToString());
                        return null;
                    }
                    return RedirectToAction("Index", new { menu = menu, success = true });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View(model);
                }
            }
            else
            {
                return View(model);
            }
        }

        [HttpPost]
        public ActionResult Sort(string data)
        {
            JArray dataItems = (JArray)JsonConvert.DeserializeObject(data);
            foreach (JObject item in dataItems)
            {
                int id = Convert.ToInt32(item["ID"].ToString());
                int sort = Convert.ToInt32(item["Sort"].ToString());
                var model = db.Banners.FirstOrDefault(a => a.ID == id);
                if (model != null)
                {
                    model.Sort = sort;
                }
            }
            db.SaveChanges();
            return Json(true);
        }

        [HttpPost]
        public ActionResult Delete(int id)
        {
            var model = db.Banners.FirstOrDefault(a => a.ID == id);
            if (model != null)
            {
                // 删除物理图片文件
                if (!string.IsNullOrEmpty(model.Photo) && System.IO.File.Exists(Server.MapPath(model.Photo)))
                {
                    System.IO.File.Delete(Server.MapPath(model.Photo));
                }
                db.Banners.Remove(model);
                db.SaveChanges();
            }
            return Json(true);
        }

        [HttpPost]
        public ActionResult Deletes(string data)
        {
            JArray dataItems = (JArray)JsonConvert.DeserializeObject(data);
            foreach (JObject item in dataItems)
            {
                int id = Convert.ToInt32(item["ID"].ToString());
                var model = db.Banners.FirstOrDefault(a => a.ID == id);
                if (model != null)
                {
                    if (!string.IsNullOrEmpty(model.Photo) && System.IO.File.Exists(Server.MapPath(model.Photo)))
                    {
                        System.IO.File.Delete(Server.MapPath(model.Photo));
                    }
                    db.Banners.Remove(model);
                }
            }
            db.SaveChanges();
            return Json(true);
        }
    }
}