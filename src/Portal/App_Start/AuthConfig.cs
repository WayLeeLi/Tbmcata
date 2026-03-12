using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using Microsoft.Web.WebPages.OAuth;
using Academy.Models;

namespace Academy
{
    public static class AuthConfig
    {
        public static void RegisterAuth()
        {
            // 若要允許此網站的用戶使用他們在其他網站(例如 Microsoft、Facebook 和 Twitter)上擁有的帳戶登錄，
            // 必須更新此網站。有關詳細資料，請訪問 http://go.microsoft.com/fwlink/?LinkID=252166

            //OAuthWebSecurity.RegisterMicrosoftClient(
            //    clientId: "",
            //    clientSecret: "");

            //OAuthWebSecurity.RegisterTwitterClient(
            //    consumerKey: "",
            //    consumerSecret: "");

            //OAuthWebSecurity.RegisterFacebookClient(
            //    appId: "",
            //    appSecret: "");

            //OAuthWebSecurity.RegisterGoogleClient();
        }
    }
}
