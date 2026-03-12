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
    public class MailSet
    {
        [Key]
        public int ID { get; set; }
        [DisplayName("寄件人郵箱")]
        public string MailAddr { get; set; }
        [DisplayName("寄件人名稱")]
        public string MailName { get; set; }
        [DisplayName("郵件密碼")]
        public string Password { get; set; }
        [DisplayName("SMTP伺服器")]
        public string Smtp { get; set; }
        [DisplayName("SMTP端口")]
        public Nullable<int> Port { get; set; }
        [DisplayName("管理員收件人郵箱")]
        public string ReviceMailAddr { get; set; }

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