using System;
using System.Collections.Generic;
using System.Linq;
using System.Reflection;
using System.Web;
using System.Web.Mvc;

namespace Academy.Common
{
    public class Enums
    {
        /// <summary>
        /// 用戶角色
        /// </summary>
        public enum UserRoleEnum
        {
            [EnumDisplayName("系統管理者")]
            Admin = 0,
            [EnumDisplayName("整鈔主管")]
            MoneyMaster = 1,
            [EnumDisplayName("整鈔操作員")]
            MoneyUser = 2,
            [EnumDisplayName("客戶")]
            Custom = 3,
            [EnumDisplayName("運鈔主管")]
            CarMaster = 4,
            [EnumDisplayName("運鈔操作員")]
            CarUser = 5
        }
    }

    /// <summary>
    /// 枚舉函數
    /// </summary>
    public class EnumsFun
    {
        /// <summary>
        /// 根據枚舉成員獲取自訂屬性EnumDisplayNameAttribute的屬性DisplayName
        /// </summary>
        /// <param name="e"></param>
        /// <returns></returns>
        public static string GetEnumCustomDescription(object e)
        {
            //獲取枚舉的Type類型對象
            Type t = e.GetType();

            //獲取枚舉的所有欄位
            FieldInfo[] ms = t.GetFields();

            //遍歷所有枚舉的所有欄位
            foreach (FieldInfo f in ms)
            {
                if (f.Name != e.ToString())
                {
                    continue;
                }

                //第二個參數true表示查找EnumDisplayNameAttribute的繼承鏈
                if (f.IsDefined(typeof(EnumDisplayNameAttribute), true))
                {
                    return
                        (f.GetCustomAttributes(typeof(EnumDisplayNameAttribute), true)[0] as EnumDisplayNameAttribute)
                            .DisplayName;
                }
            }

            //如果沒有找到自訂屬性，直接返回屬性項的名稱
            return e.ToString();
        }

        /// <summary>
        /// 根據枚舉，把枚舉自訂特性EnumDisplayNameAttribut的Display屬性值撞到SelectListItem中
        /// </summary>
        /// <param name="enumType">枚舉</param>
        /// <returns></returns>
        public static List<SelectListItem> GetSelectList(Type enumType, int? selectVal = null)
        {
            List<SelectListItem> selectList = new List<SelectListItem>();
            foreach (object e in Enum.GetValues(enumType))
            {
                SelectListItem sl = new SelectListItem() { Text = GetEnumCustomDescription(e), Value = ((int)e).ToString() };
                if (selectVal != null && selectVal.Value == (int)e)
                {
                    sl.Selected = true;
                }
                selectList.Add(sl);
            }
            return selectList;
        }

    }

    public class EnumDisplayNameAttribute : Attribute
    {
        private string _displayName;

        public EnumDisplayNameAttribute(string displayName)
        {
            this._displayName = displayName;
        }

        public string DisplayName
        {
            get { return _displayName; }
        }
    }
}
