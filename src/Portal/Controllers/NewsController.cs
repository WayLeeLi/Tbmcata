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
    public class NewsController : WebController
    {
        public ActionResult Index(int categoryId = 0)
        {
            // 获取分类数据（Menu = 5 表示新闻活动分类，Status = 1 表示上线的）
            ViewBag.CategoryList = db.Categories
                .Where(c => c.Menu == 5 && c.Status == 1)
                .OrderBy(c => c.SortOrder)
                .ToList();

            // 查询新闻数据
            var query = db.Newss
                .Where(n => n.Status == 1 && n.Menu == 5);

            if (categoryId > 0)
            {
                query = query.Where(n => n.CataID == categoryId);
                var selectedCat = db.Categories.FirstOrDefault(c => c.Id == categoryId);
                ViewBag.CurrentCategoryName = selectedCat?.Name ?? "新聞消息";
            }
            else
            {
                ViewBag.CurrentCategoryName = "新聞消息";
            }
            ViewBag.CurrentCategoryId = categoryId;

            var newsList = query.OrderByDescending(n => n.CDate).ToList();
            ViewBag.NewsList = newsList;

            return View();
        }

        /// <summary>
        /// 获取新闻列表
        /// </summary>
        /// <param name="categoryId">分类ID，0表示全部新闻</param>
        [HttpPost]
        public JsonResult GetNewsList(int categoryId = 0)
        {
            try
            {
                // 从 News 表查询新闻数据（Menu = 3 表示新闻活动）
                var query = from n in db.Newss
                            join c in db.Categories on n.CataID equals c.Id
                            where n.Status == 1 && n.Menu == 5
                            select new
                            {
                                n.ID,
                                n.Title,
                                n.ImagePath,
                                n.CataID,
                                n.CDate,
                                n.Content,
                                n.Note,
                                CategoryName = c.Name
                            };

                // 如果不是全部，按分类筛选
                if (categoryId > 0)
                {
                    query = query.Where(p => p.CataID == categoryId);
                }

                // 先获取数据到内存
                var list = query.OrderByDescending(p => p.CDate).ToList();

                // 在内存中进行格式化处理
                var result = list.Select(p => new
                {
                    p.ID,
                    p.Title,
                    ImageUrl = p.ImagePath ?? "",
                    Date = p.CDate.HasValue ? p.CDate.Value.ToString("yyyy 年 M 月") : "",
                    p.Note,
                    p.Content,
                    p.CategoryName
                }).ToList();

                return Json(new { success = true, data = result }, JsonRequestBehavior.AllowGet);
            }
            catch (Exception ex)
            {
                return Json(new { success = false, message = ex.Message }, JsonRequestBehavior.AllowGet);
            }
        }

        /// <summary>
        /// 获取新闻详情
        /// </summary>
        [HttpPost]
        public JsonResult GetNewsDetail(int id)
        {
            try
            {
                var news = (from n in db.Newss
                            join c in db.Categories on n.CataID equals c.Id
                            where n.ID == id && n.Status == 1
                            select new
                            {
                                n.ID,
                                n.Title,
                                n.ImagePath,
                                n.CDate,
                                n.Content,
                                n.Note,
                                CategoryName = c.Name
                            }).FirstOrDefault();

                if (news == null)
                {
                    return Json(new { success = false, message = "新聞不存在" }, JsonRequestBehavior.AllowGet);
                }

                var data = new
                {
                    news.ID,
                    news.Title,
                    ImageUrl = news.ImagePath ?? "",
                    Date = news.CDate.HasValue ? news.CDate.Value.ToString("yyyy 年 M 月") : "",
                    Content = news.Content ?? news.Note ?? "",
                    news.CategoryName
                };

                return Json(new { success = true, data = data }, JsonRequestBehavior.AllowGet);
            }
            catch (Exception ex)
            {
                return Json(new { success = false, message = ex.Message }, JsonRequestBehavior.AllowGet);
            }
        }

        public ActionResult Detail(int id)
        {
            // 获取当前新闻
            var news = db.Newss
                .Include("Category")   // 或者 .Include(n => n.Category)
                .FirstOrDefault(n => n.ID == id && n.Status == 1 && n.Menu == 5);
            if (news == null)
                return RedirectToAction("Index");

            // 获取分类名称（可通过 news.Category.Name 访问，或存入 ViewBag）
            ViewBag.CategoryName = news.Category?.Name;

            int currentCataId = news.CataID;

            // 获取同一分类下的上一篇（比当前新闻时间更早且最近的一条）
            var prevNews = db.Newss
                .Where(n => n.Status == 1 && n.Menu == 5 && n.CataID == currentCataId && n.CDate < news.CDate)
                .OrderByDescending(n => n.CDate)
                .FirstOrDefault();

            // 获取同一分类下的下一篇
            var nextNews = db.Newss
                .Where(n => n.Status == 1 && n.Menu == 5 && n.CataID == currentCataId && n.CDate > news.CDate)
                .OrderBy(n => n.CDate)
                .FirstOrDefault();

            // 获取同一分类下的侧边栏新闻列表
            var rawList = db.Newss
                .Where(n => n.Status == 1 && n.Menu == 5 && n.CataID == currentCataId)
                .OrderByDescending(n => n.CDate)
                .Select(n => new {
                    n.ID,
                    n.Title,
                    n.ImagePath,
                    n.CDate,
                    n.Note,
                    n.Content
                })
                .ToList();

            var sidebarNews = rawList.Select(n => new Academy.ViewModels.SidebarNewsItem
            {
                ID = n.ID,
                Title = n.Title,
                Date = n.CDate.HasValue ? n.CDate.Value.ToString("yyyy 年 M 月") : "",
                Thumb = !string.IsNullOrEmpty(n.ImagePath) ? n.ImagePath : "/images/default-news.jpg",
                Summary = n.Note
            }).ToList();

            ViewBag.PrevNews = prevNews;
            ViewBag.NextNews = nextNews;
            ViewBag.SidebarNewsList = sidebarNews;

            // 從 DictSets 讀取各項設定
            ViewBag.Address = GetDictValue("Contact_Address");
            ViewBag.Phone = GetDictValue("Contact_Phone");
            ViewBag.Email = GetDictValue("Contact_Email");
            ViewBag.Fax = GetDictValue("Contact_Fax");
            ViewBag.MapLongitude = GetDictValue("Contact_MapLongitude");
            ViewBag.MapLatitude = GetDictValue("Contact_MapLatitude");
            ViewBag.OnlineBookingText = GetDictValue("Contact_OnlineBookingText");
            ViewBag.BookingInquiry = GetDictValue("Contact_BookingInquiry");
            ViewBag.BusinessHours = GetDictValue("Contact_BusinessHours");
            ViewBag.TrafficGuide = GetDictValue("Contact_TrafficGuide");
            ViewBag.MapUrl = GetDictValue("Contact_MapUrl");

            return View(news);
        }
        private string GetDictValue(string code)
        {
            var dict = db.DictSets.FirstOrDefault(d => d.Code == code);
            return dict?.Value ?? "";
        }

        // 获取侧边栏新闻列表（AJAX）
        [HttpPost]
        public JsonResult GetSidebarNews(int currentId)
        {
            // 先查询数据到内存（避免在 LINQ to Entities 中使用 ToString）
            var list = db.Newss
                .Where(n => n.Status == 1 && n.Menu == 5)
                .OrderByDescending(n => n.CDate)
                .Select(n => new {
                    n.ID,
                    n.Title,
                    n.ImagePath,
                    n.CDate,
                    n.Note,
                    n.Content
                })
                .ToList();

            // 在内存中进行格式化处理
            var result = list.Select(n => new {
                n.ID,
                Title = n.Title,
                Date = n.CDate.HasValue ? n.CDate.Value.ToString("yyyy 年 M 月") : "",
                Thumb = !string.IsNullOrEmpty(n.ImagePath) ? n.ImagePath : "/images/default-news.jpg",
                Summary = n.Note
            }).ToList();

            return Json(result, JsonRequestBehavior.AllowGet);
        }
    }
}
