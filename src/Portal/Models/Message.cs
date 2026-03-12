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
    public class Message
    {
        [Key]
        public int ID { get; set; }
        [DisplayName("聯絡人")]
        public string UserName { get; set; }
        [DisplayName("電話")]
        public string Tel { get; set; }
        [DisplayName("E-mail")]
        public string Mail { get; set; }
        [DisplayName("諮詢內容")]
        public string Content { get; set; }
        [Display(Name = "狀態")]
        public int Status { get; set; }
        [DisplayName("回覆人")]
        public Nullable<int> ReplyUser { get; set; }
        [DisplayName("回覆時間")]
        public Nullable<System.DateTime> ReplyDate { get; set; }
        [DisplayName("回覆內容")]
        public string ReplyContent { get; set; }
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