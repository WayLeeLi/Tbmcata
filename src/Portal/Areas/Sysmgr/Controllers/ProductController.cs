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
    public class ProductController : BaseController
    {
        //
        // GET: /Sysmgr/Product/

        public ActionResult Index(int page = 1, int cata = 0, string status = "", string ordery = "")
        {
            ViewBag.CataList = db.Members.OrderBy(a => a.Sort).ThenByDescending(a => a.CDate);

            var data = from a in db.Products select a;

            if (cata != 0)
            {
                data = data.Where(a => a.MemberID == cata);
            }
            if (status != "")
            {
                int nstatus = int.Parse(status);
                DateTime dtNow = DateTime.Now;
                if (nstatus == 1)
                {
                    data = data.Where(a => a.Status == 1 || a.Status == 2 && (a.OnDate != null && a.OnDate < dtNow || a.OnDate == null) && (a.OffDate != null && a.OffDate > dtNow || a.OffDate == null));
                }
                if (nstatus == 0)
                {
                    data = data.Where(a => a.Status == 0 || a.Status == 2 && (a.OnDate != null && a.OnDate > dtNow || a.OffDate != null && a.OffDate < dtNow));
                }
            }
            switch (ordery)
            {
                case "timeasc":
                    data = data.OrderBy(a => a.CDate);
                    break;
                case "timedesc":
                    data = data.OrderByDescending(a => a.CDate);
                    break;
                case "idasc":
                    data = data.OrderBy(a => a.ID);
                    break;
                case "iddesc":
                    data = data.OrderByDescending(a => a.ID);
                    break;
                case "sortasc":
                    data = data.OrderBy(a => a.Sort);
                    break;
                case "sortdesc":
                    data = data.OrderByDescending(a => a.Sort);
                    break;
                default:
                    data = data.OrderByDescending(a => a.CDate);
                    break;
            }

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 12);

            return View(pagedData);
        }

        public ActionResult Add(int cata)
        {
            ViewBag.CataList = db.Members.OrderBy(a => a.Sort).ThenByDescending(a => a.CDate);
            Product model = new Product();
            model.MemberID = cata;
            model.Status = 1;
            return View(model);
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Add(Product model, HttpPostedFileBase file)
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
                    if (!Directory.Exists(Request.MapPath("~/Upload/Product")))
                    {
                        Directory.CreateDirectory(Request.MapPath("~/Upload/Product"));
                    }
                    var filePath = "/Upload/Product/" + DateTime.Now.ToString("yyyyMMddHHmmss") + file.FileName;
                    file.SaveAs(Request.MapPath("~") + filePath);
                    model.ImagePath = filePath;
                }
            }
            if (ModelState.IsValid)
            {
                try
                {
                    if (model.Status != 2)
                    {
                        model.OnDate = null;
                        model.OffDate = null;
                    }
                    model.Sort = (db.Products.Max(a => a.Sort) ?? 0) + 1;
                    model.CUser = this.LoginUser.ID;
                    model.CDate = DateTime.Now;
                    db.Products.Add(model);
                    db.SaveChanges();

                    return RedirectToAction("Index", "Product", new { success = true, cata = model.MemberID });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View(model);
                }
            }
            else
            {
                ViewBag.CataList = db.Members.OrderByDescending(a => a.Sort).ThenByDescending(a => a.CDate);
                return View(model);
            }
        }

        public ActionResult Edit(int id)
        {
            Product model = db.Products.Where(p => p.ID == id).FirstOrDefault();
            if (model != null)
            {
                ViewBag.CataList = db.Members.OrderBy(a => a.Sort).ThenByDescending(a => a.CDate);
                return View(model);
            }
            else
            {
                return RedirectToAction("Index", "Product");
            }
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(Product model, HttpPostedFileBase file)
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
                    if (System.IO.File.Exists(model.ImagePath))
                    {
                        System.IO.File.Delete(model.ImagePath);
                    }
                    var filePath = "/Upload/Product/" + DateTime.Now.ToString("yyyyMMddHHmmss") + file.FileName;
                    file.SaveAs(Request.MapPath("~") + filePath);
                    model.ImagePath = filePath;
                    hasFile = true;
                }
            }
            if (ModelState.IsValid)
            {
                try
                {
                    var modelOld = db.Products.Where(a => a.ID == model.ID).FirstOrDefault();
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
                                model.ImagePath = modelOld.ImagePath;
                            }
                            else
                            {
                                if (System.IO.File.Exists(modelOld.ImagePath))
                                {
                                    System.IO.File.Delete(modelOld.ImagePath);
                                }
                            }
                        }
                    }

                    if (model.Status != 2)
                    {
                        model.OnDate = null;
                        model.OffDate = null;
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
                    return RedirectToAction("Index", "Product", new { success = true, cata = model.MemberID });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View(model);
                }
            }
            else
            {
                ViewBag.CataList = db.Members.OrderByDescending(a => a.Sort).ThenByDescending(a => a.CDate);
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

                var model = db.Products.Where(a => a.ID == id).FirstOrDefault();
                model.Sort = sort;

                db.SaveChanges();
            }

            return Json(true);
        }

        [HttpPost]
        public ActionResult Delete(int id)
        {
            var model = db.Products.Where(a => a.ID == id).FirstOrDefault();

            db.Products.Remove(model);
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

                var model = db.Products.Where(a => a.ID == id).FirstOrDefault();

                db.Products.Remove(model);
                db.SaveChanges();
            }

            return Json(true);
        }

    }
}
