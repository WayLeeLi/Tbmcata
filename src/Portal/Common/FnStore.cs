using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace Academy.Common
{
    public class FnStore
    {
        public static string CutString(string str, int len, string suff = "...")
        {
            if (string.IsNullOrEmpty(str))
            {
                return "";
            }
            if (str.Length > len)
            {
                return str.Substring(0, len) + suff;
            }
            return str;
        }
        /// <summary>
        /// 获取客户端真实Ip
        /// </summary>
        /// <returns></returns>
        public static string GetClientIP()
        {
            string result = HttpContext.Current.Request.ServerVariables["HTTP_X_FORWARDED_FOR"];
            if (null == result || result == String.Empty)
            {
                result = HttpContext.Current.Request.ServerVariables["REMOTE_ADDR"];
            }

            if (null == result || result == String.Empty)
            {
                result = HttpContext.Current.Request.UserHostAddress;
            }
            return result;
        }
    }
}