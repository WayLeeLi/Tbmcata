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
    public class DictSet
    {
        [Key]
        public int ID { get; set; }
        [DisplayName("編碼")]
        [Required(ErrorMessage = "請輸入編碼")]
        public string Code { get; set; }
        [DisplayName("名稱")]
        [Required(ErrorMessage = "請輸入名稱")]
        public string Name { get; set; }
        [DisplayName("值")]
        public string Value { get; set; }
        [DisplayName("備註")]
        public string Memo { get; set; }
    }
}