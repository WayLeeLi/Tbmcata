using Academy.Models;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Data.Entity.ModelConfiguration.Conventions;
using System.Linq;
using System.Web;

namespace Academy.Models
{
    public class MyDbContext : DbContext
    {
        public DbSet<Banner> Banners { get; set; }
        public DbSet<News> Newss { get; set; }
        public DbSet<NewsCata> NewsCatas { get; set; }
        public DbSet<Category> Categories { get; set; }
        public DbSet<DictSet> DictSets { get; set; }
        public DbSet<Module> Modules { get; set; }
        public DbSet<User> Users { get; set; }
        public DbSet<Role> Roles { get; set; }
        public DbSet<MailSet> MailSets { get; set; }
        public DbSet<Message> Messages { get; set; }
        public DbSet<InquiryRecord> InquiryRecords { get; set; }
        public DbSet<Member> Members { get; set; }
        public DbSet<MemberMsg> MemberMsgs { get; set; }
        public DbSet<AdLink> AdLinks { get; set; }
        public DbSet<Product> Products { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            modelBuilder.Conventions.Remove<PluralizingTableNameConvention>();
            modelBuilder.Entity<News>()
                .HasRequired(n => n.Category)
                .WithMany()
                .HasForeignKey(n => n.CataID);
        }

        public MyDbContext()
            : base("name=DefaultConnection")
        {
        }
    }
}