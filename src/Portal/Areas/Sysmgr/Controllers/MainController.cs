using Academy.Controllers;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Academy.Areas.Sysmgr.Controllers
{
    public class MainController : BaseController
    {
        //
        // GET: /Sysmgr/Main/

        public ActionResult Index()
        {
            return View();
        }

        public ActionResult Result(bool isSuccess, string returnUrl, string errMsg, int second)
        {
            ViewBag.IsSuccess = isSuccess;
            ViewBag.ReturnUrl = returnUrl;
            ViewBag.Second = second;
            if (isSuccess)
            {
                ViewBag.ErrMsg = string.IsNullOrEmpty(errMsg) ? "恭喜您，操作成功！" : errMsg;
            }
            else
            {
                ViewBag.ErrMsg = string.IsNullOrEmpty(errMsg) ? "很遺憾，操作失敗！" : errMsg;
            }

            return View();
        }
    }
}
