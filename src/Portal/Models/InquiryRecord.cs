using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Web;

namespace Academy.Models
{
    public class InquiryRecord
    {
        [Key]
        public int Id { get; set; }

        [Required, StringLength(50)]
        public string FormType { get; set; }        // QuickQuote, QA, ProductInfo

        [Required, StringLength(100)]
        public string UserName { get; set; }

        [StringLength(200)]
        public string CompanyName { get; set; }
        [DisplayName("類別名稱")]
        public string CategoryName { get; set; }

        [Required, StringLength(50)]
        public string Phone { get; set; }

        [Required, StringLength(200)]
        public string Email { get; set; }

        public string Content { get; set; }          // 主要描述

        [Required, StringLength(2000)]
        public string ExtraData { get; set; }        // JSON 格式存储额外的字段

        public int Status { get; set; } = 0;

        public DateTime CreateTime { get; set; } = DateTime.Now;

        public DateTime? UpdateTime { get; set; }
    }
}