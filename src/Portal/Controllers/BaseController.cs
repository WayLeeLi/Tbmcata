using Academy.Common;
using Academy.Models;
using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Data.Entity.Validation;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Academy.Controllers
{
    public class BaseController : Controller
    {
        public BaseController()
        {
        }

        public MyDbContext db
        {
            get
            {
                return (MyDbContext)DbContextFactory.CreateDbContext(); //創建唯一實例。
            }
        }

        public User LoginUser
        {
            get
            {
                if (this.Session["U"] == null)
                {
                    if (Request.Url.ToString().Contains("/Sysmgr/") && !Request.Url.ToString().Contains("/Login"))
                    {
                        Response.Redirect("/Sysmgr/Account/Login");
                    }
                    return null;
                }
                return this.Session["U"] as User;
            }
        }

        public ActionResult RedirectToResult(bool isSuccess = true, string returnUrl = "/Sysmgr/Main", string errMsg = "", int second = 2000)
        {
            return RedirectToAction("Result", "Main", new { isSuccess = isSuccess, returnUrl = returnUrl, errMsg = errMsg, second = 2000 });
        }

        /// <summary>
        /// Action執行前判斷
        /// </summary>
        /// <param name="filterContext"></param>
        protected override void OnActionExecuting(ActionExecutingContext filterContext)
        {
            if (!string.IsNullOrEmpty(Request.QueryString["menu"]))
            {
                Session["menu"] = Request.QueryString["menu"];
            }
            if (!string.IsNullOrEmpty(Request.QueryString["sub"]))
            {
                Session["sub"] = Request.QueryString["sub"];
            }
            if (!string.IsNullOrEmpty(Request.QueryString["ret"]))
            {
                Session["ret"] = Request.QueryString["ret"];
            }
            if (Request.Url.ToString().Contains("/Sysmgr/"))
            {
                if (!this.CheckLogin()) //判斷是否登入
                {
                    if (!this.CheckCookie())
                    {
                        if (!Request.Url.ToString().Contains("/Login"))
                        {
                            Response.Redirect("/Sysmgr/Account/Login");
                        }
                    }
                }
                ViewBag.LoginUser = this.LoginUser;
            }
            base.OnActionExecuting(filterContext);
        }

        /// <summary>
        /// 判斷是否登入
        /// </summary>
        protected bool CheckLogin()
        {
            if (this.Session["U"] == null)
            {
                return false;
            }
            return true;
        }

        /// <summary>
        /// 檢驗cookie
        /// </summary>
        protected bool CheckCookie()
        {
            //檢驗cookie
            if (Session["U"] == null)
            {
                HttpCookie cookie = Request.Cookies["U"];
                if (cookie != null)
                {
                    int userId = int.Parse(HttpUtility.UrlDecode(cookie["userCode"]));
                    User user = (from a in db.Users where a.ID == userId select a).FirstOrDefault();
                    if (null != user)
                    {
                        #region 保存登入信息
                        {
                            user.LoginCount = (user.LoginCount ?? 0) + 1;
                            user.LoginDate = DateTime.Now;

                            db.Entry(user).State = EntityState.Modified;
                            db.SaveChanges();
                        }
                        #endregion

                        Session["U"] = user;
                        return true;
                    }
                }
            }
            return false;
        }

    }
}
