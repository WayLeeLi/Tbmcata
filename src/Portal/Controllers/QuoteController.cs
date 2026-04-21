using Academy.Models;
using Newtonsoft.Json;
using System;
using System.Linq;
using System.Text.RegularExpressions;
using System.Web.Mvc;
using static NPOI.HSSF.Util.HSSFColor;

namespace Academy.Controllers
{
    public class QuoteController : WebController
    {

        public ActionResult Index()
        {
            ViewBag.CategoryList = db.Categories
                .Where(c => c.Menu == 3 && c.ParentId != null && c.Status == 1)
                .OrderBy(c => c.SortOrder)
                .ToList();

            var qaList = db.Messages.Where(a => a.Status == 1).ToList();
            return View(qaList);
        }

        [HttpPost]
        public JsonResult QuickQuote(FormCollection form)
        {
            try
            {
                
                string name = form["Name"];
                string company = form["Company"];
                string phone = form["Phone"];
                string email = form["Email"];
                string service = form["Service"];
                string content = form["Content"];

                // 必填校验...
                if (string.IsNullOrWhiteSpace(name) || string.IsNullOrWhiteSpace(phone) ||
                    string.IsNullOrWhiteSpace(email) || string.IsNullOrWhiteSpace(service))
                {
                    return Json(new { success = false, msg = "請填寫所有必填欄位！" });
                }
                if (!Regex.IsMatch(email, @"^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"))
                {
                    return Json(new { success = false, msg = "請輸入有效的電子信箱！" });
                }

                // 保存到统一数据表
                var extra = new { Service = service };
                var record = new InquiryRecord
                {
                    FormType = "QuickQuote",
                    UserName = name,
                    CompanyName = company,
                    CategoryName=service,
                    Phone = phone,
                    Email = email,
                    Content = content,
                    ExtraData = JsonConvert.SerializeObject(extra),
                    Status = 0,
                    CDate = DateTime.Now
                };
                db.InquiryRecords.Add(record);
                db.SaveChanges();

                return Json(new { success = true, msg = "詢價已送出！" });
            }
            catch (Exception ex)
            {
                var innerMsg = ex.InnerException?.Message ?? ex.Message;
                return Json(new { success = false, msg = "系統錯誤：" + innerMsg });
            }
        }

        [HttpPost]
        public JsonResult PostQA(FormCollection form)
        {
            try
            {
                string name = form["QAName"];
                string email = form["QAEmail"];
                string question = form["QAQuestion"];

                if (string.IsNullOrWhiteSpace(name) || string.IsNullOrWhiteSpace(email) || string.IsNullOrWhiteSpace(question))
                {
                    return Json(new { success = false, msg = "請填寫所有必填欄位！" });
                }
                if (!Regex.IsMatch(email, @"^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"))
                {
                    return Json(new { success = false, msg = "請輸入有效的電子信箱！" });
                }

                var message = new Message
                {
                    UserName = name,
                    Content = question,
                    Mail = email,
                    Status = 0,
                    CDate = DateTime.Now
                };
                db.Messages.Add(message);
                db.SaveChanges();

                return Json(new { success = true, msg = "問題已送出！" });
            }
            catch (Exception ex)
            {
                var innerMsg = ex.InnerException?.Message ?? ex.Message;
                return Json(new { success = false, msg = "系統錯誤：" + innerMsg });
            }
        }

        [HttpPost]
        public JsonResult PostProductInfo(FormCollection form)
        {
            try
            {
                string company = form["Company"];
                string contact = form["Contact"];
                string phone = form["Phone"];
                string fax = form["Fax"];
                string email = form["Email"];
                string address = form["Address"];
                string productName = form["ProductName"];
                string size = form["Size"];
                string category = form["Category"];
                string requirement = form["Requirement"];
                string deadline = form["Deadline"];
                // 复选框可能传多个值，此处直接取字符串（默认逗号分隔）
                string services = form["Services"];

                // 必填项验证
                if (string.IsNullOrWhiteSpace(company) || string.IsNullOrWhiteSpace(contact) ||
                    string.IsNullOrWhiteSpace(phone) || string.IsNullOrWhiteSpace(email) ||
                    string.IsNullOrWhiteSpace(productName) || string.IsNullOrWhiteSpace(requirement))
                {
                    return Json(new { success = false, msg = "請填寫所有必填欄位！" });
                }
                if (!Regex.IsMatch(email, @"^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"))
                {
                    return Json(new { success = false, msg = "請輸入有效的電子信箱！" });
                }

                // 直接创建记录，不使用 ExtraData
                var record = new InquiryRecord
                {
                    FormType = "ProductInfo",
                    UserName = contact,
                    CompanyName = company,
                    CategoryName = category,
                    Phone = phone,
                    Email = email,
                    Content = requirement,
                    Fax = fax,
                    Address = address,
                    ProductName = productName,
                    Size = size,
                    Services = services,
                    Deadline = deadline,
                    Status = 0,
                    CDate = DateTime.Now
                };
                db.InquiryRecords.Add(record);
                db.SaveChanges();

                return Json(new { success = true, msg = "產品資訊已送出！" });
            }
            catch (Exception ex)
            {
                return Json(new { success = false, msg = "系統錯誤：" + ex.Message });
            }
        }
    }
}