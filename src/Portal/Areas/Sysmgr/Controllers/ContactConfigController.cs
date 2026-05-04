using Academy.Controllers;
using Academy.Models;
using Academy.ViewModels;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;
using PagedList;
using System;
using System.Collections.Generic;
using System.Data;
using System.IO;
using System.Linq;
using System.Web;
using System.Web.Mvc;
namespace Academy.Areas.Sysmgr.Controllers
{
    public class ContactConfigController : BaseController
    {
        public ActionResult Edit()
        {
            var model = new ContactConfigViewModel();

            model.Address = GetDictValue("Contact_Address");
            model.Phone = GetDictValue("Contact_Phone");
            model.Email = GetDictValue("Contact_Email");
            model.Fax = GetDictValue("Contact_Fax");
            model.MapUrl = GetDictValue("Contact_MapUrl");       // 改為讀取 MapUrl
            model.OnlineBookingText = GetDictValue("Contact_OnlineBookingText");
            model.BookingInquiry = GetDictValue("Contact_BookingInquiry");
            model.BusinessHours = GetDictValue("Contact_BusinessHours");
            model.TrafficGuide = GetDictValue("Contact_TrafficGuide");

            return View(model);
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(ContactConfigViewModel model)
        {
            if (!ModelState.IsValid)
            {
                return View(model);
            }

            SetDictValue("Contact_Address", model.Address);
            SetDictValue("Contact_Phone", model.Phone);
            SetDictValue("Contact_Email", model.Email);
            SetDictValue("Contact_Fax", model.Fax);
            SetDictValue("Contact_MapUrl", model.MapUrl);       // 儲存 MapUrl
            SetDictValue("Contact_OnlineBookingText", model.OnlineBookingText);
            SetDictValue("Contact_BookingInquiry", model.BookingInquiry);
            SetDictValue("Contact_BusinessHours", model.BusinessHours);
            SetDictValue("Contact_TrafficGuide", model.TrafficGuide);

            TempData["SuccessMsg"] = "儲存成功";
            return RedirectToAction("Edit");
        }

        private string GetDictValue(string code)
        {
            var dict = db.DictSets.FirstOrDefault(d => d.Code == code);
            return dict?.Value ?? "";
        }

        private void SetDictValue(string code, string value)
        {
            var dict = db.DictSets.FirstOrDefault(d => d.Code == code);
            if (dict != null)
            {
                dict.Value = value ?? "";
            }
            else
            {
                dict = new DictSet
                {
                    Code = code,
                    Name = code,
                    Value = value ?? "",
                };
                db.DictSets.Add(dict);
            }
            db.SaveChanges();
        }
    }
}
