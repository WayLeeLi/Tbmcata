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
    public class ContactController : WebController
    {
        /// <summary>
        /// 公司简介 - 默认显示关于我们
        /// </summary>
        public ActionResult Index()
        {
            ViewBag.CategoryList = db.Categories
                .Where(c => c.Menu == 3 && c.ParentId != null && c.Status == 1)
                .OrderBy(c => c.SortOrder)
                .ToList();

            // 從 DictSets 讀取各項設定
            ViewBag.Address = GetDictValue("Contact_Address");
            ViewBag.Phone = GetDictValue("Contact_Phone");
            ViewBag.Email = GetDictValue("Contact_Email");
            
            ViewBag.MapLongitude = GetDictValue("Contact_MapLongitude");
            ViewBag.MapLatitude = GetDictValue("Contact_MapLatitude");
            ViewBag.OnlineBookingText = GetDictValue("Contact_OnlineBookingText");
            ViewBag.BookingInquiry = GetDictValue("Contact_BookingInquiry");
            ViewBag.BusinessHours = GetDictValue("Contact_BusinessHours");
            ViewBag.TrafficGuide = GetDictValue("Contact_TrafficGuide");
            ViewBag.MapUrl = GetDictValue("Contact_MapUrl");

            var banner = db.Banners
                   .Where(b => b.Menu == 6 && b.Status == 1)
                   .OrderBy(b => b.Sort)
                   .FirstOrDefault();

            ViewBag.HeroImage = banner != null && !string.IsNullOrEmpty(banner.Photo)
                ? banner.Photo
                : "/images/default-about-hero.jpg";   // 請確保此預設圖片存在

            var model = db.DictSets.FirstOrDefault(a => a.Code == "SettingContact");
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
                if (string.IsNullOrWhiteSpace(userName))
                {
                    return Json(new { success = false, msg = "請輸入姓名！" });
                }
                if (string.IsNullOrWhiteSpace(tel))
                {
                    return Json(new { success = false, msg = "請輸入電話！" });
                }
                if (string.IsNullOrWhiteSpace(mail))
                {
                    return Json(new { success = false, msg = "請輸入電子信箱！" });
                }
                if (string.IsNullOrWhiteSpace(content))
                {
                    return Json(new { success = false, msg = "請輸入諮詢內容！" });
                }

                // 邮箱格式验证
                if (!System.Text.RegularExpressions.Regex.IsMatch(mail, @"^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"))
                {
                    return Json(new { success = false, msg = "請輸入有效的電子信箱地址！" });
                }

                // 保存到数据库
                var message = new InquiryRecord
                {
                    FormType = "QA",
                    UserName = userName,
                    CompanyName = companyName,
                    Phone = tel,
                    Email = mail,
                    CategoryName = category,
                    Content = content,
                    CDate = DateTime.Now,
                    Status = 0
                };
                db.InquiryRecords.Add(message);
                db.SaveChanges();

                // 可选：发送邮件
                // SendEmail(userName, mail, content);

                return Json(new { success = true, msg = "發送成功！" });
            }
            catch (Exception ex)
            {
                return Json(new { success = false, msg = "系統錯誤：" + ex.Message });
            }
        }

        private string GetDictValue(string code)
        {
            var dict = db.DictSets.FirstOrDefault(d => d.Code == code);
            return dict?.Value ?? "";
        }
    }
}