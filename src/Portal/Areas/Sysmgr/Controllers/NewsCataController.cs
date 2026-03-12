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
    public class NewsCataController : BaseController
    {
        //
        // GET: /Sysmgr/NewsCata/

        public ActionResult Index(int page = 1, string status = "", string ordery = "")
        {
            var data = from a in db.NewsCatas select a;

            if (status != "")
            {
                int nstatus = int.Parse(status);
                data = data.Where(a => a.Status == nstatus);
            }
            switch (ordery)
            {
                case "timeasc":
                    data = data.OrderBy(a => a.CDate);
                    break;
                case "timedesc":
                    data = data.OrderByDescending(a => a.CDate);
                    break;
                case "sortasc":
                    data = data.OrderBy(a => a.Sort);
                    break;
                case "sortdesc":
                    data = data.OrderByDescending(a => a.Sort);
                    break;
                default:
                    data = data.OrderBy(a => a.Sort).ThenByDescending(a => a.CDate);
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
        public ActionResult Add(NewsCata model)
        {
            if (ModelState.IsValid)
            {
                try
                {
                    model.Sort = (db.NewsCatas.Max(a => a.Sort) ?? 0) + 1;
                    model.CUser = this.LoginUser.ID;
                    model.CDate = DateTime.Now;
                    db.NewsCatas.Add(model);
                    db.SaveChanges();

                    return RedirectToAction("Index", "NewsCata", new { success = true });
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
            NewsCata model = db.NewsCatas.Where(p => p.ID == id).FirstOrDefault();
            if (model != null)
            {
                return View(model);
            }
            else
            {
                return RedirectToAction("Index", "NewsCata");
            }
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(NewsCata model)
        {
            if (ModelState.IsValid)
            {
                try
                {
                    var modelOld = db.NewsCatas.Where(a => a.ID == model.ID).FirstOrDefault();
                    if (modelOld != null)
                    {
                        db.Entry(modelOld).State = System.Data.EntityState.Detached;
                        model.Sort = modelOld.Sort;
                        model.CUser = modelOld.CUser;
                        model.CDate = modelOld.CDate;
                    }

                    model.LUser = this.LoginUser.ID;
                    model.LDate = DateTime.Now;

                    db.Entry(model).State = EntityState.Modified;
                    db.SaveChanges();

                    if (Session["ret"] != null)
                    {
                        Response.Redirect(Session["ret"].ToString());
                        return null;
                    }
                    return RedirectToAction("Index", "NewsCata", new { success = true });
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
        public ActionResult Sort(string data)
        {
            JArray dataItems = (JArray)JsonConvert.DeserializeObject(data);
            foreach (JObject item in dataItems)
            {
                int id = Convert.ToInt32(item["ID"].ToString());
                int sort = Convert.ToInt32(item["Sort"].ToString());

                var model = db.NewsCatas.Where(a => a.ID == id).FirstOrDefault();
                model.Sort = sort;

                db.SaveChanges();
            }

            return Json(true);
        }

        [HttpPost]
        public ActionResult Delete(int id)
        {
            var model = db.NewsCatas.Where(a => a.ID == id).FirstOrDefault();

            db.NewsCatas.Remove(model);
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

                var model = db.NewsCatas.Where(a => a.ID == id).FirstOrDefault();

                db.NewsCatas.Remove(model);
                db.SaveChanges();
            }

            return Json(true);
        }

    }
}
