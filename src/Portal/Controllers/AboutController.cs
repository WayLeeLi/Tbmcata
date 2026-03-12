using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using PagedList;
using Academy.Models;
using System.Data;
using Academy.Common;
using System.IO;
using System.Text;

namespace Academy.Controllers
{
    public class AboutController : WebController
    {
        /// <summary>
        /// 協會簡介
        /// </summary>
        /// <returns></returns>
        public ActionResult Info()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutInfo");

            return View(model);
        }
        /// <summary>
        /// 理事長的話
        /// </summary>
        /// <returns></returns>
        public ActionResult Chairman()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutChairman");

            return View(model);
        }
        /// <summary>
        /// 組織成員
        /// </summary>
        /// <returns></returns>
        public ActionResult Member()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutMember");

            return View(model);
        }

        /// <summary>
        /// 協會章程
        /// </summary>
        /// <returns></returns>
        public ActionResult Constitution()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutConstitution");

            return View(model);
        }

        /// <summary>
        /// 年度行事曆
        /// </summary>
        /// <returns></returns>
        public ActionResult Calendar()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutCalendar");

            return View(model);
        }

        /// <summary>
        /// 相關連結
        /// </summary>
        /// <returns></returns>
        public ActionResult Link()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "SettingLink");

            return View(model);
        }
        /// <summary>
        /// 聯絡我們
        /// </summary>
        /// <returns></returns>
        public ActionResult Contact()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "SettingContact");

            return View(model);
        }
        /// <summary>
        /// 檔案下載
        /// </summary>
        /// <returns></returns>
        public ActionResult Download()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "SettingDownload");

            return View(model);
        }
    }
}
