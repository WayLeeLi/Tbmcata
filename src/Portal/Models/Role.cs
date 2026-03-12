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
    public class Role
    {
        [Key]
        public int ID { get; set; }

        [DisplayName("名稱")]
        [StringLength(20, ErrorMessage = "不能超過20個字符")]
        [Required(ErrorMessage = "請輸入名稱")]
        public string Name { get; set; }

        [Display(Name = "控制模組")]
        public string Auth { get; set; }

        [DisplayName("類別")]
        public int Type { get; set; }

        [DisplayName("排序")]
        public int Sort { get; set; }

        [Display(Name = "狀態")]
        [Required(ErrorMessage = "請選擇狀態")]
        public int Status { get; set; }
    }

}
