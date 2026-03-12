using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Data.Entity;
using System.Globalization;
using System.Web.Mvc;
using System.Web.Security;
using System.ComponentModel;

namespace Academy.Models
{
    public class Member
    {
        [Key]
        public int ID { get; set; }
        [DisplayName("會員編號")]
        public string Code { get; set; }
        [DisplayName("公司名稱")]
        public string Name { get; set; }
        [DisplayName("通訊地址")]
        public string Addr { get; set; }
        [DisplayName("負責人")]
        public string Master { get; set; }
        [DisplayName("電話")]
        public string Tel { get; set; }
        [DisplayName("傳真")]
        public string Fax { get; set; }
        [DisplayName("公司E-Mail")]
        public string EMail { get; set; }
        [DisplayName("統編")]
        public string UCode { get; set; }
        [DisplayName("網頁")]
        public string WebUrl { get; set; }
        [DisplayName("Facebook")]
        public string Facebook { get; set; }
        [DisplayName("公司簡介")]
        public string Info { get; set; }
        [DisplayName("代表圖")]
        public string ImagePath { get; set; }
        [DisplayName("公司屬性")]
        public string Attrs { get; set; }
        [DisplayName("銷售市場")]
        public string SaleArea { get; set; }
        [DisplayName("主要產品")]
        public string Product { get; set; }
        [Display(Name = "排序")]
        public Nullable<int> Sort { get; set; }
        [Display(Name = "狀態")]
        [Required(ErrorMessage = "請選擇狀態")]
        public int Status { get; set; }
        [Display(Name = "創建人")]
        public Nullable<int> CUser { get; set; }
        [Display(Name = "創建時間")]
        public Nullable<System.DateTime> CDate { get; set; }
        [Display(Name = "修改人")]
        public Nullable<int> LUser { get; set; }
        [Display(Name = "修改時間")]
        public Nullable<System.DateTime> LDate { get; set; }
    }
}