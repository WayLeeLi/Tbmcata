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
    public class Module
    {
        [Key]
        public int ID { get; set; }
        public string Code { get; set; }
        public string Name { get; set; }
        public string Url { get; set; }
        public Nullable<int> NLevel { get; set; }
        public Nullable<int> Pid { get; set; }
        public Nullable<int> IsNotice { get; set; }
        public Nullable<int> IsAuth { get; set; }
        public Nullable<int> IsMenu { get; set; }
        public Nullable<int> Status { get; set; }
    }
}
