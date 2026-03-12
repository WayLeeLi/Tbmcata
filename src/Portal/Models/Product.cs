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
    public class Product
    {
        [Key]
        public int ID { get; set; }

        [DisplayName("所屬會員")]
        public int MemberID { get; set; }
        [DisplayName("產品名稱")]
        public string Title { get; set; }
        [Display(Name = "顯示於首頁")]
        public Nullable<int> IsShowIndex { get; set; }
        [DisplayName("代表圖")]
        public string ImagePath { get; set; }
        [DisplayName("摘要")]
        public string Note { get; set; }
        [DisplayName("內容")]
        public string Content { get; set; }
        [Display(Name = "點閱數")]
        public Nullable<int> ReadCount { get; set; }

        [Display(Name = "上線時間")]
        public Nullable<System.DateTime> OnDate { get; set; }
        [Display(Name = "下線時間")]
        public Nullable<System.DateTime> OffDate { get; set; }

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