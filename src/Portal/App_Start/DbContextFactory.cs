using Academy.Models;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace Academy
{
    /// <summary>
    /// 保證EF的上下文（執行緒內實例唯一）
    /// </summary>
    public static class DbContextFactory
    {
        public static DbContext CreateDbContext()
        {
            //執行緒內實例唯一
            DbContext db = (DbContext)HttpContext.Current.Items["DbContext"];
            if (db == null)
            {
                db = new MyDbContext();
                HttpContext.Current.Items.Add("DbContext", db);
            }
            return db;
        }
    }
}
