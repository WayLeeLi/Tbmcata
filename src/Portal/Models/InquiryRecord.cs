using System;
using System.ComponentModel;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

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
        public string CategoryName { get; set; }   // 服务项目类别

        public string Content { get; set; }

        public string ExtraData { get; set; }

        public int Status { get; set; }

        public string ReplyContent { get; set; }   // 回复内容
        public int? ReplyUser { get; set; }        // 回复人ID
        public DateTime? ReplyDate { get; set; }   // 回复时间

        public int? CUser { get; set; }            // 创建人ID
        public int? LUser { get; set; }            // 修改人ID

        public DateTime CDate { get; set; }        // 创建时间
        public DateTime? LDate { get; set; }       // 修改时间

        // ========== 新增字段 ==========
        [StringLength(50)]
        public string Fax { get; set; }            // 传真

        [StringLength(500)]
        public string Address { get; set; }        // 公司地址

        [StringLength(200)]
        public string ProductName { get; set; }    // 产品名称

        [StringLength(100)]
        public string Size { get; set; }           // 概略尺寸

        public string Services { get; set; }       // 委託服務項目（可多选，存储为JSON或逗号分隔字符串）

        [StringLength(100)]
        public string Deadline { get; set; }       // 預期完成時程
    }
}