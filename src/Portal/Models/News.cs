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
    public class News
    {
        [Key]
        public int ID { get; set; }

        [DisplayName("類別")]
        public int CataID { get; set; }
        [DisplayName("主題 ")]
        public string Title { get; set; }
        [DisplayName("圖/編輯單位")]
        public string Dept1 { get; set; }
        [DisplayName("文/編輯單位")]
        public string Dept2 { get; set; }
        [Display(Name = "顯示於首頁")]
        public Nullable<int> IsShowIndex { get; set; }
        [Display(Name = "發佈時間")]
        public Nullable<System.DateTime> PubDate { get; set; }
        [DisplayName("影片嵌入")]
        public string VideoPath { get; set; }
        [DisplayName("跳轉地址")]
        public string LinkPath { get; set; }
        [DisplayName("代表圖")]
        public string ImagePath { get; set; }
        [DisplayName("摘要")]
        public string Note { get; set; }
        [DisplayName("摘要2")]
        public string Note2 { get; set; }
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