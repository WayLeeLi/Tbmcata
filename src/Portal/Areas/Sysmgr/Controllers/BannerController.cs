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
        //
        // GET: /Sysmgr/Banner/

        public ActionResult Index(int page = 1, string status = "", string ordery = "")
        {
            var data = from a in db.Banners select a;

            if (status != "")
            {
                int nstatus = int.Parse(status);
                data = data.Where(a => a.Status == nstatus);
            }
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

            return View(pagedData);
        }

        public ActionResult Add()
        {
            return View();
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Add(Banner model, HttpPostedFileBase file)
        {
            if (file != null && file.FileName != null && file.FileName.LastIndexOf(".") > 0)
            {
                string ext = file.FileName.Substring(file.FileName.LastIndexOf(".") + 1).ToLower();
                if (ext != "jpg" && ext != "jpeg" && ext != "png" && ext != "gif" && ext != "bmp")
                {
                    ModelState.AddModelError("", "請請選擇縮略圖(僅支持jpg|jpeg|png|gif|bmp格式)!");
                }
                else
                {
                    var filePath = "/Upload/Home/" + DateTime.Now.ToString("yyyyMMddHHmmss") + file.FileName;
                    file.SaveAs(Request.MapPath("~") + filePath);
                    model.Photo = filePath;
                }
            }
            else
            {
                ModelState.AddModelError("", "請選擇電腦主圖!");
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

                    return RedirectToAction("Index", "Banner", new { success = true });
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

        public ActionResult Edit(int id)
        {
            Banner model = db.Banners.Where(p => p.ID == id).FirstOrDefault();
            if (model != null)
            {
                return View(model);
            }
            else
            {
                return RedirectToAction("Index", "Banner");
            }
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(Banner model, HttpPostedFileBase file)
        {
            bool hasFile = false;
            if (file != null && file.FileName != null && file.FileName.LastIndexOf(".") > 0)
            {
                string ext = file.FileName.Substring(file.FileName.LastIndexOf(".") + 1).ToLower();
                if (ext != "jpg" && ext != "jpeg" && ext != "png" && ext != "gif" && ext != "bmp")
                {
                    ModelState.AddModelError("", "請請選擇縮略圖(僅支持jpg|jpeg|png|gif|bmp格式)!");
                }
                else
                {
                    if (System.IO.File.Exists(model.Photo))
                    {
                        System.IO.File.Delete(model.Photo);
                    }
                    var filePath = "/Upload/Home/" + DateTime.Now.ToString("yyyyMMddHHmmss") + file.FileName;
                    file.SaveAs(Request.MapPath("~") + filePath);
                    model.Photo = filePath;
                    hasFile = true;
                }
            }

            if (ModelState.IsValid)
            {
                try
                {
                    var modelOld = db.Banners.Where(a => a.ID == model.ID).FirstOrDefault();
                    if (modelOld != null)
                    {
                        db.Entry(modelOld).State = System.Data.EntityState.Detached;
                        model.ReadCount = modelOld.ReadCount;
                        model.Sort = modelOld.Sort;
                        model.CUser = modelOld.CUser;
                        model.CDate = modelOld.CDate;
                        if (!hasFile)
                        {
                            if (Request["delimg"] == "1")
                            {
                                model.Photo = modelOld.Photo;
                            }
                            else
                            {
                                if (System.IO.File.Exists(modelOld.Photo))
                                {
                                    System.IO.File.Delete(modelOld.Photo);
                                }
                            }
                        }
                    }

                    model.LUser = this.LoginUser.ID;
                    model.LDate = DateTime.Now;

                    db.Entry(model).State = EntityState.Modified;
                    db.SaveChanges();

                    if (Session["ret"] != null)
                    {
                        Response.Redirect(Session["ret"].ToString());
                        return null;
                    }
                    return RedirectToAction("Index", "Banner", new { success = true });
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

                var model = db.Banners.Where(a => a.ID == id).FirstOrDefault();
                model.Sort = sort;

                db.SaveChanges();
            }

            return Json(true);
        }

        [HttpPost]
        public ActionResult Delete(int id)
        {
            var model = db.Banners.Where(a => a.ID == id).FirstOrDefault();

            db.Banners.Remove(model);
            db.SaveChanges();

            return Json(true);
        }

        [HttpPost]
        public ActionResult Deletes(string data)
        {
            JArray dataItems = (JArray)JsonConvert.DeserializeObject(data);
            foreach (JObject item in dataItems)
            {
                int id = Convert.ToInt32(item["ID"].ToString());

                var model = db.Banners.Where(a => a.ID == id).FirstOrDefault();

                db.Banners.Remove(model);
                db.SaveChanges();
            }

            return Json(true);
        }

    }
}
