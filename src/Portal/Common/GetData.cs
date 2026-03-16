using Academy.Models;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Academy.Common
{
    public class GetData
    {
        public static MyDbContext db
        {
            get
            {
                return (MyDbContext)DbContextFactory.CreateDbContext(); //創建唯一實例。
            }
        }

        public static int GetNewsCountByCataID(int? id)
        {
            return db.Newss.Where(p => p.CataID == id).Count();
        }

        public static string GetNewsCataName(int? id)
        {
            return db.NewsCatas.Where(p => p.ID == id).Select(a => a.Title).FirstOrDefault();
        }

        public static string GetCategorieName(int? id)
        {
            return db.Categories.Where(p => p.Id == id).Select(a => a.Name).FirstOrDefault();
        }

        public static string GetModuleNameByID(int id)
        {
            return db.Modules.Where(p => p.ID == id).Select(a => a.Name).FirstOrDefault();
        }

        public static string GetRoleNameByID(int? id)
        {
            return db.Roles.Where(p => p.ID == id).Select(a => a.Name).FirstOrDefault();
        }

        public static string GetAccountByID(int? id)
        {
            return db.Users.Where(p => p.ID == id).Select(a => a.Account).FirstOrDefault();
        }

        public static string GetUserNameByID(int? id)
        {
            return db.Users.Where(p => p.ID == id).Select(a => a.Name).FirstOrDefault();
        }

        public static string GetDictNameByPCode(string code)
        {
            return db.DictSets.Where(p => code.Contains(p.Code)).Select(a => a.Name).FirstOrDefault();
        }

        public static List<KeyValue> GetPhaseList()
        {
            List<KeyValue> list = new List<KeyValue>();
            for (int i = 1; i <= 4; i++)
            {
                KeyValue dic = new KeyValue();
                dic.ID = i.ToString();
                dic.Name = "第" + ConvertToCH(i.ToString()) + "期";
                list.Add(dic);
            }
            return list;
        }

        public static List<KeyValue> GetYearList()
        {
            List<KeyValue> list = new List<KeyValue>();
            for (int i = DateTime.Now.Year; i >= 2000; i--)
            {
                KeyValue dic = new KeyValue();
                dic.ID = i.ToString();
                dic.Name = i.ToString();
                list.Add(dic);
            }
            return list;
        }

        public static List<KeyValue> GetMonthList()
        {
            List<KeyValue> list = new List<KeyValue>();
            for (int i = 3; i <= 12; i += 3)
            {
                KeyValue dic = new KeyValue();
                dic.ID = i.ToString();
                dic.Name = i + "月";
                list.Add(dic);
            }
            return list;
        }

        public static string ConvertToCH(string num)
        {
            switch (num)
            {
                case "1":
                    return "一";
                    break;
                case "2":
                    return "二";
                    break;
                case "3":
                    return "三";
                    break;
                case "4":
                    return "四";
                    break;
                case "5":
                    return "五";
                    break;
                case "6":
                    return "六";
                    break;
                case "7":
                    return "七";
                    break;
                case "8":
                    return "八";
                    break;
                case "9":
                    return "九";
                    break;
                case "10":
                    return "十";
                    break;
                case "11":
                    return "十一";
                    break;
                case "12":
                    return "十二";
                    break;
                case "13":
                    return "十三";
                    break;
                case "14":
                    return "十四";
                    break;
                case "15":
                    return "十五";
                    break;
                case "16":
                    return "十六";
                    break;
                case "17":
                    return "十七";
                    break;
                case "18":
                    return "十八";
                    break;
                case "19":
                    return "十九";
                default:
                    break;
            }
            return "";
        }
    }
}