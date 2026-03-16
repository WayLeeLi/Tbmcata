using Academy.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace Academy.ViewModels
{
    public class CategoryViewModel
    {
        public Category Category { get; set; }

        // 用于下拉列表的父级类别集合
        public IEnumerable<SelectListItem> ParentCategories { get; set; }

        // 用于树形展示的类别集合
        public List<CategoryTreeNode> CategoryTree { get; set; }
    }

    public class CategoryTreeNode
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public int Level { get; set; }
        public int SortOrder { get; set; }
        public int Status {  get; set; }
        public DateTime CreateTime { get; set; }
        public List<CategoryTreeNode> Children { get; set; }

        public CategoryTreeNode()
        {
            Children = new List<CategoryTreeNode>();
        }
    }
}