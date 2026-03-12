<%@ WebHandler Language="C#" Class="UploadHandler" %>

using System;
using System.Web;
using System.Reflection;
using System.Collections.Specialized;

public class UploadHandler : IHttpHandler
{
    public void ProcessRequest(HttpContext context)
    {
        context.Response.ContentType = "text/plain";
        context.Response.Charset = "utf-8";

        HttpPostedFile file = context.Request.Files["Filedata"];
        string uploadPath =
            HttpContext.Current.Server.MapPath(context.Request["saveFolder"]) + "\\";

        if (file != null)
        {
            //保持原件
            string oriPath = uploadPath + "ori\\";
            if (!System.IO.Directory.Exists(oriPath))
            {
                System.IO.Directory.CreateDirectory(oriPath);
            }
            string name = DateTime.Now.ToString("yyyyMMddHHmmssffff");
            string suff = file.FileName.Substring(file.FileName.LastIndexOf("."));
            //原图
            file.SaveAs(uploadPath + name + suff);
            
            //压缩
            //file.SaveAs(oriPath + name + file.FileName);

            //保存缩略
            //SystemTools.PhotoHelper photo = new SystemTools.PhotoHelper();
            //photo.ThumbnailImage(oriPath + name + file.FileName, uploadPath + name + file.FileName, 400, 250); //280, 210

            //下面这句代码缺少的话，上传成功后上传队列的显示不会自动消失
            context.Response.Write("1," + name + suff);
        }
        else
        {
            context.Response.Write("0");
        }
    }

    public bool IsReusable
    {
        get
        {
            return false;
        }
    }
}