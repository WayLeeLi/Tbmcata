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
    public class Category
    {
        [Key]
        public int Id { get; set; }

        [Required(ErrorMessage = "类别名称不能为空")]
        [Display(Name = "类别名称")]
        [StringLength(100)]
        public string Name { get; set; }

        [Display(Name = "父级类别")]
        public int? ParentId { get; set; }

        [Display(Name = "排序")]
        public int SortOrder { get; set; } = 0;

        [Display(Name = "创建时间")]
        public DateTime CreateTime { get; set; } = DateTime.Now;

        [Display(Name = "层级路径")]
        [StringLength(500)]
        public string Path { get; set; }

        [Display(Name = "层级")]
        public int Level { get; set; } = 0;

        // 导航属性
        public virtual Category Parent { get; set; }

        public virtual ICollection<Category> Children { get; set; } = new List<Category>();

        public string DisplayName
        {
            get
            {
                if (Level > 0)
                {
                    string prefix = "";
                    for (int i = 0; i < Level; i++)
                    {
                        prefix += "　";
                    }
                    prefix += "└ ";
                    return prefix + Name;
                }
                return Name;
            }
        }

        public string PathPreview
        {
            get
            {
                return GetPathPreview();
            }
        }

        // 获取路径预览的辅助方法（C# 5.0 兼容版本）
        private string GetPathPreview()
        {
            var pathNames = new List<string>();
            var current = this;

            // 最多显示5级，避免递归太深
            int maxLevel = 5;
            int count = 0;

            while (current != null && count < maxLevel)
            {
                pathNames.Insert(0, current.Name);

                // 如果有 Parent 属性被加载，使用它（不使用空传播运算符）
                if (current.Parent != null)
                {
                    current = current.Parent;
                }
                else
                {
                    // 如果没有加载 Parent，尝试通过 ParentId 手动加载
                    // 注意：这里不能直接访问 db，所以只使用已加载的 Parent
                    break;
                }
                count++;
            }

            if (pathNames.Count == 0)
                return Name ?? "";  // 处理 null 的情况

            if (count >= maxLevel)
            {
                return "..." + string.Join(" > ", pathNames);
            }

            return string.Join(" > ", pathNames);
        }
    }
}