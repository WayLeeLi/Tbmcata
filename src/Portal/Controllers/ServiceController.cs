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
    public class ServiceController : WebController
    {
        /// <summary>
        /// 協會動態
        /// </summary>
        /// <param name="page"></param>
        /// <returns></returns>
        public ActionResult Index(int page = 1)
        {
            DateTime dtNow = DateTime.Now;

            var data = db.Newss
                .Where(a => a.Status == 1 && a.Menu == 3)
                .OrderByDescending(a => a.PubDate);

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 5);

            var categories = db.Categories.Where(s => s.Menu == 3 && s.Status == 1).OrderBy(c => c.Path).ToList();
            ViewBag.CategoryList = categories;
            return View(pagedData);
        }
        /// <summary>
        /// 跳转显示
        /// </summary>
        /// <param name="page"></param>
        /// <returns></returns>
        public ActionResult Info(int page = 1)
        {
            DateTime dtNow = DateTime.Now;

            var data = db.Newss
                .Where(a => a.Status == 1 && a.Menu == 3)
                .OrderByDescending(a => a.PubDate);

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 5);

            var categories = db.Categories.Where(s => s.Menu == 3 && s.Status == 1).OrderBy(c => c.Path).ToList();
            ViewBag.CategoryList = categories;
            return View(pagedData);
        }
        /// <summary>
        /// 產業訊息
        /// </summary>
        /// <param name="page"></param>
        /// <returns></returns>
        public ActionResult IndexIndustry(int page = 1)
        {
            DateTime dtNow = DateTime.Now;

            var data = db.Newss
                .Where(a => db.NewsCatas.Any(b => b.Status == 1 && b.Code == "industry" && b.ID == a.CataID))
                .Where(a => a.Status == 1 || a.Status == 2 && (a.OnDate != null && a.OnDate < dtNow || a.OnDate == null) && (a.OffDate != null && a.OffDate > dtNow || a.OffDate == null))
                .OrderByDescending(a => a.PubDate);

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 5);

            return View(pagedData);
        }
        [HttpPost]
        public JsonResult GetServiceContent(int categoryId)
        {
            try
            {
                // 1. 获取当前分类信息
                var category = db.Categories.FirstOrDefault(c => c.Id == categoryId);
                if (category == null)
                {
                    return Json(new { success = false, message = "分類不存在" }, JsonRequestBehavior.AllowGet);
                }

                // 2. 获取当前分类下的服务内容（从 News 表获取）
                var serviceList = db.Newss
                    .Where(n => n.CataID == categoryId && n.Status == 1)
                    .OrderBy(n => n.Sort)
                    .ToList();

                // 3. 构建模块列表
                var modules = new List<object>();

                foreach (var news in serviceList)
                {
                    var images = new List<string>();

                    // 添加图片
                    if (!string.IsNullOrEmpty(news.ImagePath))
                    {
                        images.Add(news.ImagePath);
                    }
                    if (!string.IsNullOrEmpty(news.ImagePath))
                    {
                        images.Add(news.ImagePath);
                    }

                    var module = new
                    {
                        title = news.Title ?? "",
                        enTitle = news.Title ?? "",
                        images = images,
                        content = news.Content ?? news.Note ?? ""
                    };
                    modules.Add(module);
                }

                // 4. 如果没有数据，返回默认内容
                if (modules.Count == 0)
                {
                    modules.Add(new
                    {
                        title = category.Name,
                        enTitle = GetEnTitleByCategoryName(category.Name),
                        images = new List<string>(),
                        content = GetDefaultContentByCategoryName(category.Name)
                    });
                }

                // 5. 获取同级分类（用于上下页导航）
                var siblings = db.Categories
                    .Where(c => c.ParentId == category.ParentId && c.Status == 1)
                    .OrderBy(c => c.SortOrder)
                    .ToList();

                var currentIndex = siblings.FindIndex(c => c.Id == categoryId);

                // 上一个分类
                object prevCategory = null;
                if (currentIndex > 0)
                {
                    var prev = siblings[currentIndex - 1];
                    prevCategory = new { id = prev.Id, name = prev.Name };
                }

                // 下一个分类
                object nextCategory = null;
                if (currentIndex < siblings.Count - 1)
                {
                    var next = siblings[currentIndex + 1];
                    nextCategory = new { id = next.Id, name = next.Name };
                }

                // 6. 返回数据
                var data = new
                {
                    categoryId = category.Id,
                    title = category.Name,
                    enTitle = GetEnTitleByCategoryName(category.Name),
                    modules = modules,
                    prevCategoryId = prevCategory != null ? ((dynamic)prevCategory).id : (int?)null,
                    prevCategoryName = prevCategory != null ? ((dynamic)prevCategory).name : null,
                    nextCategoryId = nextCategory != null ? ((dynamic)nextCategory).id : (int?)null,
                    nextCategoryName = nextCategory != null ? ((dynamic)nextCategory).name : null
                };

                return Json(new { success = true, data = data }, JsonRequestBehavior.AllowGet);
            }
            catch (Exception ex)
            {
                return Json(new { success = false, message = ex.Message }, JsonRequestBehavior.AllowGet);
            }
        }
        /// <summary>
        /// 根据分类名称获取英文标题
        /// </summary>
        private string GetEnTitleByCategoryName(string categoryName)
        {
            switch (categoryName)
            {
                case "汽車零配件設計":
                    return "Automotive Parts & Body Kit Design";
                case "摩托車設計服務":
                    return "Motorcycle Design Service";
                case "自行車設計服務":
                    return "Bicycle Design Service";
                case "船舶外形設計服務":
                    return "Marine / Yacht Design Service";
                case "汽車零配件逆向工程":
                    return "Automotive Reverse Engineering";
                case "3C家電":
                    return "Consumer Electronics Design";
                case "生活用品":
                    return "Lifestyle Product Design";
                case "汽車外觀A級曲面製作":
                    return "Class-A Surface for Automotive";
                case "正向ＣＡＤ":
                    return "Forward CAD Modeling";
                case "產品開模量產":
                    return "Mold Development & Mass Production";
                case "逆向工程服務":
                    return "3D Reverse Engineering Service";
                default:
                    return "Design Service";
            }
        }

        /// <summary>
        /// 获取默认内容
        /// </summary>
        private string GetDefaultContentByCategoryName(string categoryName)
        {
            return $"智匯創新提供專業的{categoryName}服務，從設計概念到工程開發，全程為您創造最高價值。歡迎聯繫我們了解更多詳情。";
        }
        /// <summary>
        /// 相關公告
        /// </summary>
        /// <param name="page"></param>
        /// <returns></returns>
        public ActionResult IndexNotice(int page = 1)
        {
            DateTime dtNow = DateTime.Now;

            var data = db.Newss
                .Where(a => db.NewsCatas.Any(b => b.Status == 1 && b.Code == "notice" && b.ID == a.CataID))
                .Where(a => a.Status == 1 || a.Status == 2 && (a.OnDate != null && a.OnDate < dtNow || a.OnDate == null) && (a.OffDate != null && a.OffDate > dtNow || a.OffDate == null))
                .OrderByDescending(a => a.PubDate);

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 5);

            return View(pagedData);
        }
        /// <summary>
        /// 影音區
        /// </summary>
        /// <param name="page"></param>
        /// <returns></returns>
        public ActionResult IndexVideo(int page = 1)
        {
            DateTime dtNow = DateTime.Now;

            var data = db.Newss
                .Where(a => db.NewsCatas.Any(b => b.Status == 1 && b.Code == "video" && b.ID == a.CataID))
                .Where(a => a.Status == 1 || a.Status == 2 && (a.OnDate != null && a.OnDate < dtNow || a.OnDate == null) && (a.OffDate != null && a.OffDate > dtNow || a.OffDate == null))
                .OrderByDescending(a => a.PubDate);

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 12);

            return View(pagedData);
        }
        /// <summary>
        /// 相片區
        /// </summary>
        /// <param name="page"></param>
        /// <returns></returns>
        public ActionResult IndexPhoto(int page = 1)
        {
            DateTime dtNow = DateTime.Now;

            var data = db.Newss
                .Where(a => db.NewsCatas.Any(b => b.Status == 1 && b.Code == "photo" && b.ID == a.CataID))
                .Where(a => a.Status == 1 || a.Status == 2 && (a.OnDate != null && a.OnDate < dtNow || a.OnDate == null) && (a.OffDate != null && a.OffDate > dtNow || a.OffDate == null))
                .OrderByDescending(a => a.PubDate);

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 12);

            return View(pagedData);
        }
        /// <summary>
        /// 活動集錦
        /// </summary>
        /// <param name="page"></param>
        /// <returns></returns>
        public ActionResult IndexActive(int page = 1)
        {
            DateTime dtNow = DateTime.Now;

            var data = db.Newss
                .Where(a => db.NewsCatas.Any(b => b.Status == 1 && b.Code == "active" && b.ID == a.CataID))
                .Where(a => a.Status == 1 || a.Status == 2 && (a.OnDate != null && a.OnDate < dtNow || a.OnDate == null) && (a.OffDate != null && a.OffDate > dtNow || a.OffDate == null))
                .OrderByDescending(a => a.PubDate);

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 12);

            return View(pagedData);
        }
        /// <summary>
        /// 詳情
        /// </summary>
        /// <param name="id"></param>
        /// <returns></returns>
        public ActionResult Detail(int id)
        {
            News model = db.Newss.Where(p => p.ID == id).FirstOrDefault();
            if (!string.IsNullOrEmpty(model.LinkPath) && model.LinkPath.Trim().Length > 0)
            {
                return Redirect(model.LinkPath);
            }
            if (model != null)
            {
                model.ReadCount = (model.ReadCount ?? 0) + 1;
                db.SaveChanges();

                ViewBag.CataName = db.NewsCatas.Where(p => p.Status == 1 && p.ID == model.CataID).Select(a => a.Title).FirstOrDefault();
                ViewBag.PrevModel = db.Newss.Where(p => p.Status == 1 && p.CataID == model.CataID && p.ID < model.ID).OrderByDescending(a => a.ID).FirstOrDefault();
                ViewBag.NextModel = db.Newss.Where(p => p.Status == 1 && p.CataID == model.CataID && p.ID > model.ID).OrderBy(a => a.ID).FirstOrDefault();

                return View(model);
            }
            else
            {
                return RedirectToAction("Detail", "News");
            }
        }

    }
}
