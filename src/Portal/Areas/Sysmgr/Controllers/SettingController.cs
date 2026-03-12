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
    public class SettingController : BaseController
    {
        /// <summary>
        /// 相關連結
        /// </summary>
        /// <returns></returns>
        public ActionResult Link()
        {
            if (!db.DictSets.Any(a => a.Code == "SettingLink"))
            {
                DictSet model = new DictSet();
                model.Code = "SettingLink";
                model.Name = "相關連結";
                model.Value = "";
                db.DictSets.Add(model);
                db.SaveChanges();
            }

            ViewBag.Dict = db.DictSets.ToDictionary(k => k.Code, v => v.Value);

            return View();
        }
        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Link(FormCollection collection)
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

        /// <summary>
        /// 聯絡我們
        /// </summary>
        /// <returns></returns>
        public ActionResult Contact()
        {
            if (!db.DictSets.Any(a => a.Code == "SettingContact"))
            {
                DictSet model = new DictSet();
                model.Code = "SettingContact";
                model.Name = "聯絡我們";
                model.Value = "";
                db.DictSets.Add(model);
                db.SaveChanges();
            }

            ViewBag.Dict = db.DictSets.ToDictionary(k => k.Code, v => v.Value);

            return View();
        }
        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Contact(FormCollection collection)
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

        /// <summary>
        /// 檔案下載
        /// </summary>
        /// <returns></returns>
        public ActionResult Download()
        {
            if (!db.DictSets.Any(a => a.Code == "SettingDownload"))
            {
                DictSet model = new DictSet();
                model.Code = "SettingDownload";
                model.Name = "檔案下載";
                model.Value = "";
                db.DictSets.Add(model);
                db.SaveChanges();
            }

            ViewBag.Dict = db.DictSets.ToDictionary(k => k.Code, v => v.Value);

            return View();
        }
        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Download(FormCollection collection)
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
        // GET: /Sysmgr/Setting/

        public ActionResult Mail()
        {
            MailSet model = db.MailSets.FirstOrDefault();
            if (model == null)
            {
                model = new MailSet();
                model.Sort = 1;
                model.Status = 1;
                model.CDate = DateTime.Now;
                model.CUser = LoginUser.ID;
                model.LDate = DateTime.Now;
                model.LUser = LoginUser.ID;
                db.MailSets.Add(model);
                db.SaveChanges();
                return View(model);
            }
            return View(model);
        }


        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Mail(MailSet model)
        {
            if (ModelState.IsValid)
            {
                try
                {
                    var modelOld = db.MailSets.FirstOrDefault();
                    if (modelOld != null)
                    {
                        db.Entry(modelOld).State = System.Data.EntityState.Detached;
                        model.Sort = modelOld.Sort;
                        model.CUser = modelOld.CUser;
                        model.CDate = modelOld.CDate;
                    }

                    model.LUser = this.LoginUser.ID;
                    model.LDate = DateTime.Now;

                    db.Entry(model).State = EntityState.Modified;
                    db.SaveChanges();

                    return RedirectToAction("Mail", "Setting", new { success = true });
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

    }
}
