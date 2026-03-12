using Academy.Controllers;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using PagedList;
using Academy.Models;
using System.IO;
using System.Data;
using Newtonsoft.Json.Linq;
using Newtonsoft.Json;
using Academy.Common;

namespace Academy.Areas.Sysmgr.Controllers
{
    public class AccountController : BaseController
    {
        //
        // GET: /Sysmgr/Account/

        public ActionResult Index(int page = 1, string ordery = "")
        {
            var data = from a in db.Users select a;

            switch (ordery)
            {
                case "timeasc":
                    data = data.OrderBy(a => a.CDate);
                    break;
                case "timedesc":
                    data = data.OrderByDescending(a => a.CDate);
                    break;
                case "ltimeasc":
                    data = data.OrderBy(a => a.LoginDate);
                    break;
                case "ltimedesc":
                    data = data.OrderByDescending(a => a.LoginDate);
                    break;
                default:
                    data = data.OrderByDescending(a => a.CDate);
                    break;
            }

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 12);

            return View(pagedData);
        }

        public ActionResult Add()
        {
            return View();
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Add(User model)
        {
            if (ModelState.IsValid)
            {
                try
                {
                    model.Sort = (db.Users.Select(a => a.Sort).Max() ?? 0) + 1;
                    model.CUser = this.LoginUser.ID;
                    model.CDate = DateTime.Now;
                    model.Status = 1;
                    if (Request["IsSuper"] == "1")
                    {
                        model.IsSuper = 1;
                        model.Auths = "";
                    }
                    else
                    {
                        model.IsSuper = 0;
                        model.Auths = Request["Auths"]??"";
                    }

                    if (db.Users.Where(a => a.Account == model.Account).Count() > 0)
                    {
                        ModelState.AddModelError("", "使用者帳號重複，請重新填寫!");
                        return View(model);
                    }

                    db.Users.Add(model);
                    db.SaveChanges();

                    return RedirectToAction("Index", "Account", new { success = true });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View(model);
                }
            }
            else
            {
                return View(model);
            }
        }

        public ActionResult Edit(int id)
        {
            User model = db.Users.Where(p => p.ID == id).FirstOrDefault();
            if (model != null)
            {
                return View(model);
            }
            else
            {
                return RedirectToAction("Index", "Account");
            }
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(User model)
        {
            if (ModelState.IsValid)
            {
                try
                {
                    var modelOld = db.Users.Where(a => a.ID == model.ID).FirstOrDefault();
                    if (modelOld != null)
                    {
                        db.Entry(modelOld).State = System.Data.EntityState.Detached;
                        model.Sort = modelOld.Sort;
                        model.CUser = modelOld.CUser;
                        model.CDate = modelOld.CDate;
                        model.LoginCount = modelOld.LoginCount;
                        model.LoginDate = modelOld.LoginDate;
                        model.Status = modelOld.Status;
                        if (string.IsNullOrEmpty(model.Password))
                        {
                            model.Password = modelOld.Password;
                        }
                    }

                    model.LUser = this.LoginUser.ID;
                    model.LDate = DateTime.Now;
                    if (Request["IsSuper"] == "1")
                    {
                        model.IsSuper = 1;
                        model.Auths = "";
                    }
                    else
                    {
                        model.IsSuper = 0;
                        model.Auths = Request["Auths"] ?? "";
                    }

                    if (db.Users.Where(a => a.Account == model.Account && a.ID != model.ID).Count() > 0)
                    {
                        ModelState.AddModelError("", "使用者帳號重複，請重新填寫!");
                        return View(model);
                    }

                    db.Entry(model).State = EntityState.Modified;
                    db.SaveChanges();

                    if (Session["ret"] != null)
                    {
                        Response.Redirect(Session["ret"].ToString());
                        return null;
                    }
                    return RedirectToAction("Index", "Account", new { success = true });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View(model);
                }
            }
            else
            {
                return View(model);
            }
        }

        [HttpPost]
        public ActionResult Delete(int id)
        {
            var model = db.Users.Where(a => a.ID == id).FirstOrDefault();

            db.Users.Remove(model);
            db.SaveChanges();

            return Json(true);
        }

        // 顯示會員登入頁面
        public ActionResult Login()
        {
            return View();
        }

        //執行會員登入
        [HttpPost]
        public ActionResult Login(LoginModel model, string returnUrl)
        {
            if (ValidateUser(model.Account, model.Password))
            {
                if (string.IsNullOrEmpty(returnUrl))
                {
                    Response.Redirect("/Sysmgr/Main");
                }
                else
                {
                    return Redirect(returnUrl);
                }
            }

            return View(model);
        }

        public ActionResult Logout()
        {
            Session.Abandon();
            HttpCookie cookie = new HttpCookie("U");
            cookie.Expires = DateTime.Now.AddDays(-1);
            Response.Cookies.Add(cookie);

            Response.Redirect("/Sysmgr/Account/Login");
            return null;
        }

        public ActionResult MyInfo()
        {
            User model = this.LoginUser;

            return View(model);
        }


        [HttpPost]
        public ActionResult EditPwd()
        {
            var model = db.Users.Where(a => a.ID == this.LoginUser.ID).FirstOrDefault();

            if (ModelState.IsValid)
            {
                try
                {
                    if (model.Password != Request["OldPwd"])
                    {
                        ModelState.AddModelError("", "舊密碼輸入錯誤，請重試!");
                        return View("MyInfo", model);
                    }
                    model.LUser = this.LoginUser.ID;
                    model.LDate = DateTime.Now;

                    model.Password = Request["NewPwd"];

                    db.Entry(model).State = EntityState.Modified;
                    db.SaveChanges();

                    return RedirectToAction("Index", "Account", new { success = true });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View("MyInfo", model);
                }
            }
            else
            {
                return View("MyInfo", model);
            }
        }

        #region 私有方法

        private bool ValidateUser(string account, string password)
        {
            var User = (from p in db.Users
                        where p.Account == account && p.Password == password
                        select p).FirstOrDefault();

            // 如果 User 物件不為 null 則代表會員的帳號、密碼輸入正確
            if (User != null)
            {
                if (User.Status != 0)
                {
                    if (!string.IsNullOrEmpty(User.IPS))
                    {
                        string cIp = FnStore.GetClientIP();
                        if (!User.IPS.Contains(cIp))
                        {
                            ModelState.AddModelError("", "該IP限制登入，請換可用IP再試!");
                            return false;
                        }
                    }

                    #region 保存登入信息
                    {
                        User.LoginCount = (User.LoginCount ?? 0) + 1;
                        User.LoginDate = DateTime.Now;

                        db.Entry(User).State = EntityState.Modified;
                        db.SaveChanges();
                    }
                    #endregion

                    Session["U"] = User;

                    //存HttpCookie
                    HttpCookie cookie = new HttpCookie("U");
                    cookie["userCode"] = HttpUtility.UrlEncode(User.ID.ToString());
                    cookie.Expires = DateTime.Now.AddDays(7);
                    Response.Cookies.Add(cookie);

                    User.LoginDate = DateTime.Now;
                    User.LoginCount = (User.LoginCount == null ? 0 : User.LoginCount) + 1;
                    db.SaveChanges();

                    return true;
                }
                else
                {
                    ModelState.AddModelError("", "您尚未通過會員驗證，請等候!");
                    return false;
                }
            }
            else
            {
                ModelState.AddModelError("", "您輸入的帳號或密碼錯誤");
                return false;
            }
        }

        #endregion
    }
}
