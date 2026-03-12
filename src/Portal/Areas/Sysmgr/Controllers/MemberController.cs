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
    public class MemberController : BaseController
    {
        /// <summary>
        /// 入會須知
        /// </summary>
        /// <returns></returns>
        public ActionResult JoinIn()
        {
            if (!db.DictSets.Any(a => a.Code == "MemberJoinIn"))
            {
                DictSet model = new DictSet();
                model.Code = "MemberJoinIn";
                model.Name = "入會須知";
                model.Value = "";
                db.DictSets.Add(model);
                db.SaveChanges();
            }

            ViewBag.Dict = db.DictSets.ToDictionary(k => k.Code, v => v.Value);

            return View();
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult JoinIn(FormCollection collection)
        {
            if (ModelState.IsValid)
            {
                var list = db.DictSets;
                foreach (var item in list)
                {
                    string val = collection.Get(item.Code);
                    if (val != null)
                    {
                        item.Value = val;
                    }
                }
                db.SaveChanges();

                return Json(new { success = true });
            }
            else
            {
                return Json(new { success = false, msg = "保存失敗，請重試！" });
            }
        }

        //
        // GET: /Sysmgr/Member/

        public ActionResult Index(int page = 1, string keyword = "", string status = "", string ordery = "")
        {
            var data = from a in db.Members select a;

            keyword = (keyword ?? "").Trim();
            if (keyword != "")
            {
                ViewBag.Keyword = keyword;
                data = data.Where(a => a.Code.Contains(keyword) || a.Name.Contains(keyword) || a.Info.Contains(keyword));
            }
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
        public ActionResult Add(Member model, HttpPostedFileBase file)
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
                    var filePath = "/Upload/Member/" + DateTime.Now.ToString("yyyyMMddHHmmss") + file.FileName;
                    file.SaveAs(Request.MapPath("~") + filePath);
                    model.ImagePath = filePath;
                }
            }
            if (ModelState.IsValid)
            {
                try
                {
                    if (db.Members.Any(a => a.Code == model.Code))
                    {
                        ModelState.AddModelError("", "會員編號已存在，請重新填寫!");
                        return View(model);
                    }

                    model.Sort = (db.Members.Max(a => a.Sort) ?? 0) + 1;
                    model.CUser = this.LoginUser.ID;
                    model.CDate = DateTime.Now;
                    db.Members.Add(model);
                    db.SaveChanges();

                    return RedirectToAction("Index", "Member", new { success = true });
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
            Member model = db.Members.Where(p => p.ID == id).FirstOrDefault();
            if (model != null)
            {
                return View(model);
            }
            else
            {
                return RedirectToAction("Index", "Member");
            }
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(Member model, HttpPostedFileBase file)
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
                    var filePath = "/Upload/Member/" + DateTime.Now.ToString("yyyyMMddHHmmss") + file.FileName;
                    file.SaveAs(Request.MapPath("~") + filePath);
                    model.ImagePath = filePath;
                    hasFile = true;
                }
            }
            if (ModelState.IsValid)
            {
                try
                {
                    if (db.Members.Any(a => a.Code == model.Code && a.ID != model.ID))
                    {
                        ModelState.AddModelError("", "會員編號已存在，請重新填寫!");
                        return View(model);
                    }

                    var modelOld = db.Members.Where(a => a.ID == model.ID).FirstOrDefault();
                    if (modelOld != null)
                    {
                        db.Entry(modelOld).State = System.Data.EntityState.Detached;
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

                    model.LUser = this.LoginUser.ID;
                    model.LDate = DateTime.Now;

                    db.Entry(model).State = EntityState.Modified;
                    db.SaveChanges();

                    if (Session["ret"] != null)
                    {
                        Response.Redirect(Session["ret"].ToString());
                        return null;
                    }
                    return RedirectToAction("Index", "Member", new { success = true });
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

                var model = db.Members.Where(a => a.ID == id).FirstOrDefault();
                model.Sort = sort;

                db.SaveChanges();
            }

            return Json(true);
        }

        [HttpPost]
        public ActionResult Delete(int id)
        {
            var model = db.Members.Where(a => a.ID == id).FirstOrDefault();

            db.Members.Remove(model);
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

                var model = db.Members.Where(a => a.ID == id).FirstOrDefault();

                db.Members.Remove(model);
                db.SaveChanges();
            }

            return Json(true);
        }

    }
}
