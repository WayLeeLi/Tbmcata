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
    public class MemberController : WebController
    {
        /// <summary>
        /// 全部列表
        /// </summary>
        /// <param name="page"></param>
        /// <returns></returns>
        public ActionResult Index(int page = 1)
        {
            var data = db.Members
                .Where(a => a.Status == 1)
                .OrderBy(a => a.Sort)
                .ThenBy(a => a.Code);

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 1000);

            return View(pagedData);
        }
        /// <summary>
        /// 詳情
        /// </summary>
        /// <param name="id"></param>
        /// <returns></returns>
        public ActionResult Detail(int id)
        {
            Member model = db.Members.Where(p => p.ID == id).FirstOrDefault();
            if (model != null)
            {
                ViewBag.ProductList = db.Products.Where(a => a.Status == 1 && a.MemberID == id).OrderByDescending(a => a.CDate).ToList();

                return View(model);
            }
            else
            {
                return RedirectToAction("Index", "Member");
            }
        }

        /// <summary>
        /// 入會須知
        /// </summary>
        /// <returns></returns>
        public ActionResult Join()
        {
            var model = db.DictSets.FirstOrDefault(a => a.Code == "MemberJoinIn");

            return View(model);
        }
        /// <summary>
        /// 詳情
        /// </summary>
        /// <param name="id"></param>
        /// <returns></returns>
        public ActionResult ProductDetail(int id)
        {
            Product model = db.Products.Where(p => p.ID == id).FirstOrDefault();
            if (model != null)
            {
                model.ReadCount = (model.ReadCount ?? 0) + 1;
                db.SaveChanges();

                ViewBag.PrevModel = db.Products.Where(p => p.Status == 1 && p.MemberID == model.MemberID && p.ID < model.ID).OrderByDescending(a => a.ID).FirstOrDefault();
                ViewBag.NextModel = db.Products.Where(p => p.Status == 1 && p.MemberID == model.MemberID && p.ID > model.ID).OrderBy(a => a.ID).FirstOrDefault();

                return View(model);
            }
            else
            {
                return RedirectToAction("Detail", "Member");
            }
        }
    }
}
