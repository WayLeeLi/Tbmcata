using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Academy.ViewModels
{
    public class SidebarNewsItem
    {
        public int ID { get; set; }
        public string Title { get; set; }
        public string Date { get; set; }
        public string Thumb { get; set; }
        public string Summary { get; set; }
    }
}