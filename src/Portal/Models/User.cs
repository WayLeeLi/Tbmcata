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
    public class User
    {
        [Key]
        public int ID { get; set; }

        [DisplayName("子編")]
        [Required(ErrorMessage = "請輸入會員編號")]
        [Description("我們將以會員子編作為登入帳號")]
        [Remote("CheckReAccount", "Account", HttpMethod = "POST", ErrorMessage = "您輸入的帳號已經有人使用過!")]
        public string Account { get; set; }

        [DisplayName("密碼")]
        [Description("密碼將加密儲存")]
        [DataType(DataType.Password)]
        public string Password { get; set; }
        
        [DisplayName("姓名")]
        [Required(ErrorMessage = "請輸入姓名")]
        public string Name { get; set; }

        [DisplayName("角色")]
        [Required(ErrorMessage = "請選擇角色類型")]
        public int Role { get; set; }

        [Display(Name = "限制ip")]
        public string IPS { get; set; }

        [Display(Name = "權限")]
        public string Auths { get; set; }

        [Display(Name = "備註")]
        public string Memo { get; set; }

        [DisplayName("電子郵件")]
        [RegularExpression(@"^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$", ErrorMessage = "請輸入正確的Email格式")]
        [StringLength(50, ErrorMessage = "不能超過50個字符")]
        public string Email { get; set; }

        [Display(Name = "手機號碼")]
        [StringLength(20, ErrorMessage = "不能超過20個字符")]
        public string Phone { get; set; }

        [Display(Name = "座機號碼")]
        [StringLength(20, ErrorMessage = "不能超過20個字符")]
        public string Tel { get; set; }

        [Display(Name = "傳真")]
        [StringLength(20, ErrorMessage = "不能超過20個字符")]
        public string Fax { get; set; }

        [Display(Name = "是否為超級管理員")]
        public Nullable<int> IsSuper { get; set; }

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

        [Display(Name = "登入次數")]
        public Nullable<int> LoginCount { get; set; }
        [Display(Name = "登入時間")]
        public Nullable<System.DateTime> LoginDate { get; set; }
        [Display(Name = "是否已修改時間")]
        public Nullable<int> IsEditPwd { get; set; }
    }

    public class LoginModel
    {
        [Display(Name = "帳號")]
        [Required(ErrorMessage = "請輸入帳號")]
        public string Account { get; set; }

        [DisplayName("密碼")]
        [Required(ErrorMessage = "請輸入密碼")]
        [DataType(DataType.Password)]
        public string Password { get; set; }

        [Display(Name = "記住我?")]
        public bool RememberMe { get; set; }
    }

    public class ChangeModel
    {
        [Key]
        public int ID { get; set; }

        [DisplayName("舊密碼")]
        [Required(ErrorMessage = "請輸入舊密碼")]
        [DataType(DataType.Password)]
        public string Password { get; set; }

        [DisplayName("新密碼")]
        [Required(ErrorMessage = "請輸入新密碼")]
        [DataType(DataType.Password)]
        public string NewPassword { get; set; }

        [DisplayName("確認密碼")]
        [Required(ErrorMessage = "請輸入密碼")]
        [DataType(DataType.Password)]
        public string ConfirmPassword { get; set; }
    }

}
