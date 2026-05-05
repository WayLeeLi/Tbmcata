using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using PagedList;
using Academy.Models;
using System.Data;

namespace Academy.Controllers
{
    public class ProductController : WebController
    {
        public ActionResult Index()
        {
            // 获取分类数据（Menu = 4 表示作品集分类，Status = 1 表示上线的）
            ViewBag.CategoryList = db.Categories
                .Where(c => c.Menu == 4 && c.Status == 1)
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
                     .Where(b => b.Menu == 4 && b.Status == 1)
                     .OrderBy(b => b.Sort)
                     .FirstOrDefault();

            ViewBag.HeroImage = banner != null && !string.IsNullOrEmpty(banner.Photo)
                ? banner.Photo
                : "/images/default-about-hero.jpg";   // 請確保此預設圖片存在

            return View();
        }

        private string GetDictValue(string code)
        {
            var dict = db.DictSets.FirstOrDefault(d => d.Code == code);
            return dict?.Value ?? "";
        }

        [HttpPost]
        public JsonResult GetPortfolioList(int categoryId = 0)
        {
            try
            {
                // 从 News 表查询作品数据（Menu = 4 表示作品集）
                var query = from n in db.Newss
                            join c in db.Categories on n.CataID equals c.Id
                            where n.Status == 1 && n.Menu == 4
                            select new
                            {
                                n.ID,
                                n.Title,
                                n.ImagePath,
                                n.CataID,
                                n.CDate,
                                CategoryName = c.Name
                            };

                // 如果不是全部，按分类筛选
                if (categoryId > 0)
                {
                    query = query.Where(p => p.CataID == categoryId);
                }

                var list = query.OrderByDescending(p => p.CDate)
                    .Select(p => new
                    {
                        p.ID,
                        p.Title,
                        // 优先使用 ImagePath，如果没有则使用 Photo
                        ImageUrl = !string.IsNullOrEmpty(p.ImagePath) ? p.ImagePath : p.ImagePath,
                        p.CataID,
                        p.CategoryName,
                        // 如果没有 IsWide/IsTall 字段，可以去掉或设置默认值
                        IsWide = false,
                        IsTall = false
                    })
                    .ToList();

                return Json(new { success = true, data = list }, JsonRequestBehavior.AllowGet);
            }
            catch (Exception ex)
            {
                return Json(new { success = false, message = ex.Message }, JsonRequestBehavior.AllowGet);
            }
        }

    }
}
