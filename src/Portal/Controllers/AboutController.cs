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
        /// 公司简介 - 默认显示关于我们
        /// </summary>
        public ActionResult Index()
        {
            ViewBag.CategoryList = db.Categories
                .Where(c => c.Menu == 3 && c.ParentId == null && c.Status == 1)
                .OrderBy(c => c.SortOrder)
                .ToList();

            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutInfo");
            return View(model);
        }

        /// <summary>
        /// 關於智匯創新
        /// </summary>
        public ActionResult Info()
        {
            ViewBag.CategoryList = db.Categories
                .Where(c => c.Menu == 3 && c.ParentId == null && c.Status == 1)
                .OrderBy(c => c.SortOrder)
                .ToList();
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutInfo");
            return View(model);
        }

        /// <summary>
        /// 公司使命
        /// </summary>
        public ActionResult Chairman()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutChairman");
            return View(model);
        }

        /// <summary>
        /// 核心價值
        /// </summary>
        public ActionResult Member()
        {
            ViewBag.CategoryList = db.Categories
                .Where(c => c.Menu == 3 && c.ParentId == null && c.Status == 1)
                .OrderBy(c => c.SortOrder)
                .ToList();
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutMember");
            return View(model);
        }

        /// <summary>
        /// 協會章程
        /// </summary>
        public ActionResult Constitution()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutConstitution");
            return View(model);
        }

        /// <summary>
        /// 年度行事曆
        /// </summary>
        public ActionResult Calendar()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "AboutCalendar");
            return View(model);
        }

        /// <summary>
        /// 相關連結
        /// </summary>
        public ActionResult Link()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "SettingLink");
            return View(model);
        }

        /// <summary>
        /// 聯絡我們
        /// </summary>
        public ActionResult Contact()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "SettingContact");
            return View(model);
        }

        /// <summary>
        /// 檔案下載
        /// </summary>
        public ActionResult Download()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "SettingDownload");
            return View(model);
        }
        [HttpPost]
        public JsonResult PostMsg(FormCollection form)
        {
            try
            {
                string userName = form["UserName"];
                string companyName = form["CompanyName"];
                string tel = form["Tel"];
                string mail = form["Mail"];
                string category = form["CategoryName"];
                string content = form["Content"];

                // 必填项验证
                if (string.IsNullOrWhiteSpace(userName) || string.IsNullOrWhiteSpace(tel) ||
                    string.IsNullOrWhiteSpace(mail) || string.IsNullOrWhiteSpace(content))
                {
                    return Json(new { success = false, msg = "請填寫所有必填欄位！" });
                }

                // 邮箱格式验证
                if (!System.Text.RegularExpressions.Regex.IsMatch(mail, @"^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"))
                {
                    return Json(new { success = false, msg = "請輸入有效的電子信箱！" });
                }

                // TODO: 保存数据或发送邮件

                return Json(new { success = true, msg = "發送成功！" });
            }
            catch (Exception ex)
            {
                return Json(new { success = false, msg = "系統錯誤：" + ex.Message });
            }
        }
    }
}