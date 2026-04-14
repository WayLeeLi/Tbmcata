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
        public string FormType { get; set; }

        [StringLength(100)]
        public string UserName { get; set; }

        [StringLength(200)]
        public string CompanyName { get; set; }

        [StringLength(50)]
        public string Phone { get; set; }

        [StringLength(200)]
        public string Email { get; set; }

        [StringLength(100)]
        public string CategoryName { get; set; }   // 新增：服务项目类别

        public string Content { get; set; }

        public string ExtraData { get; set; }

        public int Status { get; set; }

        public string ReplyContent { get; set; }   // 新增：回复内容
        public int? ReplyUser { get; set; }        // 新增：回复人ID
        public DateTime? ReplyDate { get; set; }   // 新增：回复时间

        public int? CUser { get; set; }            // 新增：创建人ID
        public int? LUser { get; set; }            // 新增：修改人ID

        public DateTime CDate { get; set; }   // 保留（与CDate可能重复，可考虑统一）
        public DateTime? LDate { get; set; }
    }
}