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
    public class InfoController : WebController
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

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 100);

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
                return View(model);
            }
            else
            {
                return RedirectToAction("Index", "Info");
            }
        }
    }
}
