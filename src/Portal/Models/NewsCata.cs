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
    public class NewsCata
    {
        [Key]
        public int ID { get; set; }
        [DisplayName("類別名稱")]
        public string Title { get; set; }
        [DisplayName("類別標識")]
        public string Code { get; set; }
        [DisplayName("跳轉地址")]
        public string LinkPath { get; set; }
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