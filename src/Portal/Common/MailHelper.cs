using Academy.Models;
using System;
using System.Collections.Generic;
using System.Configuration;
using System.IO;
using System.Linq;
using System.Net.Mail;
using System.Threading.Tasks;
using System.Web;

namespace Academy.Common
{
    public class MailHelper
    {
        public static MyDbContext db
        {
            get
            {
                return (MyDbContext)DbContextFactory.CreateDbContext(); //創建唯一實例。
            }
        }

        public static void SendEmail(string sendEmail, string title, string mailBody)
        {
            if (string.IsNullOrEmpty(sendEmail))
            {
                return;
            }
            //string MailAddress = db.DictSets.Where(a => a.Code == "MailAddress").Select(a => a.Value).FirstOrDefault();
            //string MailPassword = db.DictSets.Where(a => a.Code == "MailPassword").Select(a => a.Value).FirstOrDefault();
            //string MailSMTP = db.DictSets.Where(a => a.Code == "MailSMTP").Select(a => a.Value).FirstOrDefault();
            //string SendEmail = db.DictSets.Where(a => a.Code == "SendEmail").Select(a => a.Value).FirstOrDefault();

            MailSet model = db.MailSets.FirstOrDefault();
            if (model == null)
            {
                return;
            }
            string MailAddress = model.MailAddr;
            string MailName = model.MailName;
            string MailPassword = model.Password;
            string MailSMTP = model.Smtp;

            if (string.IsNullOrEmpty(MailAddress) || string.IsNullOrEmpty(MailName) || string.IsNullOrEmpty(MailPassword) || string.IsNullOrEmpty(MailSMTP))
            {
                return;
            }
            //string SendEmail = ConfigurationManager.AppSettings["SendEmail"];

            // 準備郵件內容
            //string mailBody = System.IO.File.ReadAllText(Server.MapPath("~/App_Data/MemberRegisterEMailTemplate.htm"));
            //mailBody = mailBody.Replace("{{Name}}", "");

            // 發送郵件給會員
            string logRoot = HttpContext.Current.Request.PhysicalApplicationPath;
            try
            {
                SmtpClient SmtpServer = new SmtpClient(MailSMTP);
                SmtpServer.Port = Convert.ToInt32(model.Port ?? 25);
                SmtpServer.Credentials = new System.Net.NetworkCredential(MailAddress, MailPassword);
                SmtpServer.EnableSsl = Convert.ToInt32(ConfigurationManager.AppSettings["MailSSL"]) == 1;

                MailMessage mail = new MailMessage();
                mail.From = new MailAddress(MailAddress, MailName);
                string[] arr = sendEmail.Split(';');
                foreach (var item in arr)
                {
                    mail.To.Add(item);
                }
                mail.Subject = title;
                mail.Body = mailBody;
                mail.IsBodyHtml = true;

                Task task = new Task(() =>
                {
                    try
                    {
                        SmtpServer.Send(mail);
                    }
                    catch (Exception ex)
                    {
                        using (StreamWriter writer = new StreamWriter(logRoot + @"logs\" + DateTime.Now.ToString("yyyyMMdd") + ".logs", true))
                        {
                            writer.WriteLine("----------------Exception----------------");
                            writer.WriteLine(ex.ToString());
                            writer.WriteLine("----datetime：" + DateTime.Now.ToString() + "----");
                        }
                    }
                });
                task.Start();
            }
            catch (Exception ex)
            {
                using (StreamWriter writer = new StreamWriter(logRoot + @"logs\" + DateTime.Now.ToString("yyyyMMdd") + ".logs", true))
                {
                    writer.WriteLine("----------------Exception----------------");
                    writer.WriteLine(ex.ToString());
                    writer.WriteLine("----datetime：" + DateTime.Now.ToString() + "----");
                }
                // 發生郵件寄送失敗，需紀錄進資料庫備查，以免有會員無法登入
            }
        }
    }
}