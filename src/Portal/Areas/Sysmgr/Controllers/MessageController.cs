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

namespace Academy.Areas.Sysmgr.Controllers
{
    public class MessageController : BaseController
    {
        //
        // GET: /Sysmgr/Message/

        public ActionResult Index(int page = 1, string status = "", string ordery = "")
        {
            var data = from a in db.Messages select a;

            if (status != "")
            {
                int nstatus = int.Parse(status);
                DateTime dtNow = DateTime.Now;
                if (nstatus == 1)
                {
                    data = data.Where(a => a.Status == 1);
                }
                if (nstatus == 0)
                {
                    data = data.Where(a => a.Status == 0);
                }
            }
            switch (ordery)
            {
                case "timeasc":
                    data = data.OrderBy(a => a.CDate);
                    break;
                case "timedesc":
                    data = data.OrderByDescending(a => a.CDate);
                    break;
                case "idasc":
                    data = data.OrderBy(a => a.ID);
                    break;
                case "iddesc":
                    data = data.OrderByDescending(a => a.ID);
                    break;
                default:
                    data = data.OrderByDescending(a => a.CDate);
                    break;
            }

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 12);

            return View(pagedData);
        }

        public ActionResult Edit(int id)
        {
            Message model = db.Messages.Where(p => p.ID == id).FirstOrDefault();
            if (model != null)
            {
                return View(model);
            }
            else
            {
                return RedirectToAction("Index", "Message");
            }
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(Message model)
        {
            if (ModelState.IsValid)
            {
                try
                {
                    var modelOld = db.Messages.Where(a => a.ID == model.ID).FirstOrDefault();
                    if (modelOld != null)
                    {
                        db.Entry(modelOld).State = System.Data.EntityState.Detached;
                        model.UserName = modelOld.UserName;
                        model.Tel = modelOld.Tel;
                        model.Mail = modelOld.Mail;
                        model.Content = modelOld.Content;
                        model.CUser = modelOld.CUser;
                        model.CDate = modelOld.CDate;
                    }
                    model.Status = 1;
                    model.ReplyUser = this.LoginUser.ID;
                    model.ReplyDate = DateTime.Now;
                    model.LUser = this.LoginUser.ID;
                    model.LDate = DateTime.Now;

                    db.Entry(model).State = EntityState.Modified;
                    db.SaveChanges();

                    //回覆發郵件
                    Common.MailHelper.SendEmail(model.Mail, "智匯創新股份有限公司回覆了您的諮詢", model.ReplyContent);

                    if (Session["ret"] != null)
                    {
                        Response.Redirect(Session["ret"].ToString());
                        return null;
                    }
                    return RedirectToAction("Index", "Message", new { success = true });
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
            var model = db.Messages.Where(a => a.ID == id).FirstOrDefault();

            db.Messages.Remove(model);
            db.SaveChanges();

            return Json(true);
        }

        [HttpPost]
        public ActionResult Deletes(string data)
        {
            JArray dataItems = (JArray)JsonConvert.DeserializeObject(data);
            foreach (JObject item in dataItems)
            {
                int id = Convert.ToInt32(item["ID"].ToString());

                var model = db.Messages.Where(a => a.ID == id).FirstOrDefault();

                db.Messages.Remove(model);
                db.SaveChanges();
            }

            return Json(true);
        }

    }
}
