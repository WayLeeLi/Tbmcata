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
    public class AdLink
    {
        [Key]
        public int ID { get; set; }
        [DisplayName("主題")]
        public string Title { get; set; }
        [DisplayName("副標")]
        public string SubTitle { get; set; }
        [DisplayName("連結設定")]
        public string LinkURL { get; set; }
        [DisplayName("開啟視窗")]
        public int OpenType { get; set; }
        [DisplayName("電腦主圖")]
        public string Photo { get; set; }
        [Display(Name = "點閱數")]
        public Nullable<int> ReadCount { get; set; }
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