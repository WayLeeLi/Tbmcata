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
        /// <summary>
        /// 協會動態
        /// </summary>
        /// <param name="page"></param>
        /// <returns></returns>
        public ActionResult Index(int page = 1)
        {
            DateTime dtNow = DateTime.Now;

            var data = db.Newss
                .Where(a => db.NewsCatas.Any(b => b.Status == 1 && b.Code == "news" && b.ID == a.CataID))
                .Where(a => a.Status == 1 || a.Status == 2 && (a.OnDate != null && a.OnDate < dtNow || a.OnDate == null) && (a.OffDate != null && a.OffDate > dtNow || a.OffDate == null))
                .OrderByDescending(a => a.PubDate);

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 5);

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
