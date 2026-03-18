using Academy.Controllers;
using Academy.Models;
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
using System.Web.UI.WebControls;

namespace Academy.Areas.Sysmgr.Controllers
{
    public class NewsController : BaseController
    {
        //
        // GET: /Sysmgr/News/

        public ActionResult Index(int page = 1, int cata = 0, string status = "", string ordery = "", string menu = "")
        {
            var resunt = string.IsNullOrEmpty(menu) ? 0 : int.Parse(menu);
            var categories = db.Categories.Where(s => s.Menu == resunt && s.Status == 1).OrderBy(c => c.Path).ToList();
            var categoryFilterList = new List<SelectListItem>();
            categoryFilterList.Add(new SelectListItem { Value = "", Text = "請選擇" });

            foreach (var cat in categories)
            {
                string prefix = "";
                if (cat.Level > 0)
                {
                    // 根据层级添加缩进（每级两个空格）
                    for (int i = 0; i < cat.Level; i++)
                    {
                        prefix += "  ";
                    }
                    // 添加层级符号
                    prefix += "└─ ";
                }

                categoryFilterList.Add(new SelectListItem
                {
                    Value = cat.Id.ToString(),
                    Text = prefix + cat.Name,
                    Selected = (cata == cat.Id)
                });
            }
            ViewBag.CategoryFilterList = categoryFilterList;

            var data = from a in db.Newss where a.Menu == resunt select a;

            if (cata != 0)
            {
                data = data.Where(a => a.CataID == cata);
            }
            if (status != "")
            {
                int nstatus = int.Parse(status);
                DateTime dtNow = DateTime.Now;
                if (nstatus == 1)
                {
                    data = data.Where(a => a.Status == 1 || a.Status == 2 && (a.OnDate != null && a.OnDate < dtNow || a.OnDate == null) && (a.OffDate != null && a.OffDate > dtNow || a.OffDate == null));
                }
                if (nstatus == 0)
                {
                    data = data.Where(a => a.Status == 0 || a.Status == 2 && (a.OnDate != null && a.OnDate > dtNow || a.OffDate != null && a.OffDate < dtNow));
                }
            }
            switch (ordery)
            {
                case "pubtimeasc":
                    data = data.OrderBy(a => a.PubDate);
                    break;
                case "pubtimedesc":
                    data = data.OrderByDescending(a => a.PubDate);
                    break;
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
                case "sortasc":
                    data = data.OrderBy(a => a.Sort);
                    break;
                case "sortdesc":
                    data = data.OrderByDescending(a => a.Sort);
                    break;
                default:
                    data = data.OrderByDescending(a => a.PubDate);
                    break;
            }

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 12);

            return View(pagedData);
        }

        public ActionResult Search()
        {
            ViewBag.Users = db.Users;
            ViewBag.CataList = db.NewsCatas.OrderBy(a => a.Sort).ThenByDescending(a => a.CDate);

            return View();
        }

        [HttpGet]
        public ActionResult SearchList(int page = 1, string status = "", string ordery = "")
        {
            DateTime StartDate = DateTime.Parse("2000-01-01");
            DateTime EndDate = DateTime.Now;
            DateTime PubStartDate = DateTime.Parse("2000-01-01");
            DateTime PubEndDate = DateTime.Now;
            int CataID = 0;
            string KeyWord = "";
            int Status = -1;
            int CreateUser = 0;

            if (!string.IsNullOrEmpty(Request["StartDate"]))
            {
                StartDate = DateTime.Parse(Request["StartDate"]);
                ViewBag.StartDate = StartDate.ToString("yyyy-MM-dd");
            }
            else
            {
                ViewBag.StartDate = "開始";
            }
            if (!string.IsNullOrEmpty(Request["EndDate"]))
            {
                EndDate = DateTime.Parse(Request["EndDate"]).AddDays(1);
                ViewBag.EndDate = EndDate.ToString("yyyy-MM-dd");
            }
            else
            {
                ViewBag.EndDate = "至今";
            }
            //
            if (!string.IsNullOrEmpty(Request["PubStartDate"]))
            {
                PubStartDate = DateTime.Parse(Request["PubStartDate"]);
                ViewBag.PubStartDate = StartDate.ToString("yyyy-MM-dd");
            }
            else
            {
                ViewBag.PubStartDate = "開始";
            }
            if (!string.IsNullOrEmpty(Request["PubEndDate"]))
            {
                PubEndDate = DateTime.Parse(Request["PubEndDate"]).AddDays(1);
                ViewBag.PubEndDate = EndDate.ToString("yyyy-MM-dd");
            }
            else
            {
                ViewBag.PubEndDate = "至今";
            }

            if (!string.IsNullOrEmpty(Request["CataID"]))
            {
                CataID = int.Parse(Request["CataID"]);
                ViewBag.CataName = Common.GetData.GetNewsCataName(CataID);
            }
            else
            {
                ViewBag.Type = "未選";
            }

            if (!string.IsNullOrEmpty(Request["KeyWord"]))
            {
                KeyWord = Request["KeyWord"];
                ViewBag.KeyWord = KeyWord;
            }
            else
            {
                ViewBag.KeyWord = "未輸入";
            }
            if (!string.IsNullOrEmpty(Request["Status"]))
            {
                switch (Request["Status"])
                {
                    case "0":
                        Status = 0;
                        ViewBag.Status = "下線中";
                        break;
                    case "1":
                        Status = 1;
                        ViewBag.Status = "上線中";
                        break;
                    default:
                        ViewBag.Status = "全部";
                        break;
                }
            }
            else
            {
                ViewBag.Status = "未選擇";
            }
            if (!string.IsNullOrEmpty(Request["CreateUser"]))
            {
                CreateUser = int.Parse(Request["CreateUser"]);
                ViewBag.CreateUser = Common.GetData.GetUserNameByID(CreateUser);
            }
            else
            {
                ViewBag.CreateUser = "未選擇";
            }
            //搜索
            var data = from a in db.Newss
                       where a.CDate >= StartDate && a.CDate <= EndDate && a.PubDate >= PubStartDate && a.PubDate <= PubEndDate
                       select a;

            if (CataID != 0)
            {
                data = data.Where(a => a.CataID == CataID);
            }

            if (KeyWord != "")
            {
                KeyWord = KeyWord.Trim();
                data = data.Where(a => a.Title.Contains(KeyWord) || a.Dept1.Contains(KeyWord) || a.Dept2.Contains(KeyWord) || a.Note.Contains(KeyWord) || a.Content.Contains(KeyWord));
            }

            if (Status != -1)
            {
                int nstatus = Status;
                DateTime dtNow = DateTime.Now;
                if (nstatus == 1)
                {
                    data = data.Where(a => a.Status == 1 || a.Status == 2 && (a.OnDate != null && a.OnDate < dtNow || a.OnDate == null) && (a.OffDate != null && a.OffDate > dtNow || a.OffDate == null));
                }
                if (nstatus == 0)
                {
                    data = data.Where(a => a.Status == 0 || a.Status == 2 && (a.OnDate != null && a.OnDate > dtNow || a.OffDate != null && a.OffDate < dtNow));
                }
            }

            if (CreateUser != 0)
            {
                data = data.Where(a => a.CUser == CreateUser);
            }

            switch (ordery)
            {
                case "pubtimeasc":
                    data = data.OrderBy(a => a.PubDate);
                    break;
                case "pubtimedesc":
                    data = data.OrderByDescending(a => a.PubDate);
                    break;
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
                case "sortasc":
                    data = data.OrderBy(a => a.Sort);
                    break;
                case "sortdesc":
                    data = data.OrderByDescending(a => a.Sort);
                    break;
                default:
                    data = data.OrderByDescending(a => a.Sort).ThenByDescending(a => a.CDate);
                    break;
            }

            var pagedData = data.ToPagedList(pageNumber: page, pageSize: 12);

            return View(pagedData);
        }

        public ActionResult Add(string menu = "")
        {
            var resunt = string.IsNullOrEmpty(menu) ? 0 : int.Parse(menu);
            var categories = db.Categories.Where(s => s.Menu == resunt && s.Status == 1).OrderBy(c => c.Path).ToList();

            // 构建下拉列表项（带层级缩进）
            var categoryList = new List<SelectListItem>();
            categoryList.Add(new SelectListItem { Value = "", Text = "請選擇" });

            foreach (var cat in categories)
            {
                string prefix = "";
                if (cat.Level > 0)
                {
                    // 根据层级添加缩进（每级两个空格）
                    for (int i = 0; i < cat.Level; i++)
                    {
                        prefix += "  ";
                    }
                    // 添加层级符号
                    prefix += "└─ ";
                }

                categoryList.Add(new SelectListItem
                {
                    Value = cat.Id.ToString(),
                    Text = prefix + cat.Name
                });
            }
            ViewBag.CategorySelectList = categoryList;
            News model = new News();
            model.Menu = resunt;
            model.Status = 1;
            model.PubDate = DateTime.Now;
            return View(model);
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Add(News model, HttpPostedFileBase file)
        {
            if (file != null && file.FileName != null && file.FileName.LastIndexOf(".") > 0)
            {
                string ext = file.FileName.Substring(file.FileName.LastIndexOf(".") + 1).ToLower();
                if (ext != "jpg" && ext != "jpeg" && ext != "png" && ext != "gif" && ext != "bmp")
                {
                    ModelState.AddModelError("", "請請選擇縮略圖(僅支持jpg|jpeg|png|gif|bmp格式)!");
                }
                else
                {
                    var filePath = "/Upload/News/" + DateTime.Now.ToString("yyyyMMddHHmmss") + file.FileName;
                    file.SaveAs(Request.MapPath("~") + filePath);
                    model.ImagePath = filePath;
                }
            }
            if (ModelState.IsValid)
            {
                try
                {
                    if (model.Status != 2)
                    {
                        model.OnDate = null;
                        model.OffDate = null;
                    }
                    model.Sort = (db.Newss.Max(a => a.Sort) ?? 0) + 1;
                    model.CUser = this.LoginUser.ID;
                    model.CDate = DateTime.Now;
                    db.Newss.Add(model);
                    db.SaveChanges();

                    return RedirectToAction("Index", "News", new { menu = model.Menu, success = true });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View(model);
                }
            }
            else
            {
                ViewBag.CataList = db.NewsCatas.OrderByDescending(a => a.Sort).ThenByDescending(a => a.CDate);
                return View(model);
            }
        }

        public ActionResult Edit(int id, string menu = "")
        {
            News model = db.Newss.Where(p => p.ID == id).FirstOrDefault();
            if (model != null)
            {
                var resunt = string.IsNullOrEmpty(menu) ? 0 : int.Parse(menu);
                var categories = db.Categories.Where(s => s.Menu == resunt && s.Status == 1).OrderBy(c => c.Path).ToList();

                // 构建下拉列表项（带层级缩进）
                var categoryList = new List<SelectListItem>();
                categoryList.Add(new SelectListItem { Value = "", Text = "請選擇" });

                foreach (var cat in categories)
                {
                    string prefix = "";
                    if (cat.Level > 0)
                    {
                        // 根据层级添加缩进（每级两个空格）
                        for (int i = 0; i < cat.Level; i++)
                        {
                            prefix += "  ";
                        }
                        // 添加层级符号
                        prefix += "└─ ";
                    }

                    categoryList.Add(new SelectListItem
                    {
                        Value = cat.Id.ToString(),
                        Text = prefix + cat.Name
                    });
                }
                ViewBag.CategorySelectList = categoryList;
                return View(model);
            }
            else
            {
                return RedirectToAction("Index", "News");
            }
        }

        [HttpPost]
        [ValidateInput(false)]
        public ActionResult Edit(News model, HttpPostedFileBase file)
        {
            bool hasFile = false;
            if (file != null && file.FileName != null && file.FileName.LastIndexOf(".") > 0)
            {
                string ext = file.FileName.Substring(file.FileName.LastIndexOf(".") + 1).ToLower();
                if (ext != "jpg" && ext != "jpeg" && ext != "png" && ext != "gif" && ext != "bmp")
                {
                    ModelState.AddModelError("", "請請選擇縮略圖(僅支持jpg|jpeg|png|gif|bmp格式)!");
                }
                else
                {
                    if (System.IO.File.Exists(model.ImagePath))
                    {
                        System.IO.File.Delete(model.ImagePath);
                    }
                    var filePath = "/Upload/News/" + DateTime.Now.ToString("yyyyMMddHHmmss") + file.FileName;
                    file.SaveAs(Request.MapPath("~") + filePath);
                    model.ImagePath = filePath;
                    hasFile = true;
                }
            }
            if (ModelState.IsValid)
            {
                try
                {
                    var modelOld = db.Newss.Where(a => a.ID == model.ID).FirstOrDefault();
                    if (modelOld != null)
                    {
                        db.Entry(modelOld).State = System.Data.EntityState.Detached;
                        model.ReadCount = modelOld.ReadCount;
                        model.Sort = modelOld.Sort;
                        model.CUser = modelOld.CUser;
                        model.CDate = modelOld.CDate;
                        if (!hasFile)
                        {
                            if (Request["delimg"] == "1")
                            {
                                model.ImagePath = modelOld.ImagePath;
                            }
                            else
                            {
                                if (System.IO.File.Exists(modelOld.ImagePath))
                                {
                                    System.IO.File.Delete(modelOld.ImagePath);
                                }
                            }
                        }
                    }

                    if (model.Status != 2)
                    {
                        model.OnDate = null;
                        model.OffDate = null;
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
                    return RedirectToAction("Index", "News", new { menu = model.Menu, success = true });
                }
                catch
                {
                    ModelState.AddModelError("", "操作異常，請重試!");
                    return View(model);
                }
            }
            else
            {
                ViewBag.CataList = db.NewsCatas.OrderByDescending(a => a.Sort).ThenByDescending(a => a.CDate);
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

                var model = db.Newss.Where(a => a.ID == id).FirstOrDefault();
                model.Sort = sort;

                db.SaveChanges();
            }

            return Json(true);
        }

        [HttpPost]
        public ActionResult Delete(int id)
        {
            var model = db.Newss.Where(a => a.ID == id).FirstOrDefault();

            db.Newss.Remove(model);
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

                var model = db.Newss.Where(a => a.ID == id).FirstOrDefault();

                db.Newss.Remove(model);
                db.SaveChanges();
            }

            return Json(true);
        }

    }
}
