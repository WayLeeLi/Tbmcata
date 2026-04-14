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
    public class QuickQuoteController : BaseController
    {
        //
        // GET: /Sysmgr/Message/

        public ActionResult Index(int page = 1, string status = "", string ordery = "")
        {
            var data = db.InquiryRecords.AsQueryable();

            data=data.Where(a => a.FormType == "QuickQuote");
            if (status == "1")
                data = data.Where(a => a.Status == 1);
            else if (status == "0")
                data = data.Where(a => a.Status == 0);

            switch (ordery)
            {
                case "timeasc": data = data.OrderBy(a => a.CDate); break;
                case "timedesc": data = data.OrderByDescending(a => a.CDate); break;
                case "idasc": data = data.OrderBy(a => a.Id); break;
                case "iddesc": data = data.OrderByDescending(a => a.Id); break;
                default: data = data.OrderByDescending(a => a.CDate); break;
            }

            var pagedData = data.ToPagedList(page, 12);
            return View(pagedData);
        }

        public ActionResult Edit(int id)
        {
            var model = db.InquiryRecords.Find(id);
            if (model == null) return RedirectToAction("Index");
            return View(model);
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(InquiryRecord model)
        {
            if (ModelState.IsValid)
            {
                try
                {
                    var old = db.InquiryRecords.AsNoTracking().FirstOrDefault(a => a.Id == model.Id);
                    if (old == null) return HttpNotFound();

                    // 保留原始提交信息
                    model.UserName = old.UserName;
                    model.CompanyName = old.CompanyName;
                    model.Phone = old.Phone;
                    model.Email = old.Email;
                    model.Content = old.Content;
                    model.CUser = old.CUser;
                    model.CDate = old.CDate;
                    model.FormType = old.FormType;
                    model.ExtraData = old.ExtraData;

                    model.Status = 1;                      // 已回复
                    model.ReplyUser = this.LoginUser.ID;
                    model.ReplyDate = DateTime.Now;
                    model.LUser = this.LoginUser.ID;
                    model.LDate = DateTime.Now;

                    db.Entry(model).State = EntityState.Modified;
                    db.SaveChanges();

                    // 发送回复邮件
                    Common.MailHelper.SendEmail(model.Email, "智匯創新股份有限公司回覆了您的諮詢", model.ReplyContent);

                    if (Session["ret"] != null)
                        Response.Redirect(Session["ret"].ToString());
                    return RedirectToAction("Index", new { success = true });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View(model);
                }
            }
            return View(model);
        }

        [HttpPost]
        public ActionResult Delete(int id)
        {
            var model = db.InquiryRecords.Find(id);
            if (model != null)
            {
                db.InquiryRecords.Remove(model);
                db.SaveChanges();
            }
            return Json(true);
        }

        [HttpPost]
        public ActionResult Deletes(string data)
        {
            var items = JsonConvert.DeserializeObject<JArray>(data);
            foreach (var item in items)
            {
                int id = item["ID"].Value<int>();
                var model = db.InquiryRecords.Find(id);
                if (model != null)
                {
                    db.InquiryRecords.Remove(model);
                }
            }
            db.SaveChanges();
            return Json(true);
        }

    }
}
