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
    public class AboutController : BaseController
    {
        /// <summary>
        /// 協會簡介
        /// </summary>
        /// <returns></returns>
        public ActionResult Info()
        {
            if (!db.DictSets.Any(a => a.Code == "AboutInfo"))
            {
                DictSet model = new DictSet();
                model.Code = "AboutInfo";
                model.Name = "協會簡介";
                model.Value = "";
                db.DictSets.Add(model);
                db.SaveChanges();
            }

            ViewBag.Dict = db.DictSets.ToDictionary(k => k.Code, v => v.Value);

            return View();
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Info(FormCollection collection)
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
        /// 理事長的話
        /// </summary>
        /// <returns></returns>
        public ActionResult Chairman()
        {
            if (!db.DictSets.Any(a => a.Code == "AboutChairman"))
            {
                DictSet model = new DictSet();
                model.Code = "AboutChairman";
                model.Name = "理事長的話";
                model.Value = "";
                db.DictSets.Add(model);
                db.SaveChanges();
            }

            ViewBag.Dict = db.DictSets.ToDictionary(k => k.Code, v => v.Value);

            return View();
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Chairman(FormCollection collection)
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
        /// 組織成員
        /// </summary>
        /// <returns></returns>
        public ActionResult Member()
        {
            if (!db.DictSets.Any(a => a.Code == "AboutMember"))
            {
                DictSet model = new DictSet();
                model.Code = "AboutMember";
                model.Name = "組織成員";
                model.Value = "";
                db.DictSets.Add(model);
                db.SaveChanges();
            }

            ViewBag.Dict = db.DictSets.ToDictionary(k => k.Code, v => v.Value);

            return View();
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Member(FormCollection collection)
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
        /// 協會章程
        /// </summary>
        /// <returns></returns>
        public ActionResult Constitution()
        {
            if (!db.DictSets.Any(a => a.Code == "AboutConstitution"))
            {
                DictSet model = new DictSet();
                model.Code = "AboutConstitution";
                model.Name = "協會章程";
                model.Value = "";
                db.DictSets.Add(model);
                db.SaveChanges();
            }

            ViewBag.Dict = db.DictSets.ToDictionary(k => k.Code, v => v.Value);

            return View();
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Constitution(FormCollection collection)
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
        /// 年度行事曆
        /// </summary>
        /// <returns></returns>
        public ActionResult Calendar()
        {
            if (!db.DictSets.Any(a => a.Code == "AboutCalendar"))
            {
                DictSet model = new DictSet();
                model.Code = "AboutCalendar";
                model.Name = "年度行事曆";
                model.Value = "";
                db.DictSets.Add(model);
                db.SaveChanges();
            }

            ViewBag.Dict = db.DictSets.ToDictionary(k => k.Code, v => v.Value);

            return View();
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Calendar(FormCollection collection)
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
    }
}
