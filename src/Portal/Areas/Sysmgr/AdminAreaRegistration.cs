using System.Web.Mvc;

namespace Academy.Areas.Sysmgr
{
    public class AdminAreaRegistration : AreaRegistration
    {
        public override string AreaName
        {
            get
            {
                return "Sysmgr";
            }
        }

        public override void RegisterArea(AreaRegistrationContext context)
        {
            context.MapRoute(
                "Sysmgr_default",
                "Sysmgr/{controller}/{action}/{id}",
                new { action = "Index", id = UrlParameter.Optional },
                new string[] { "Academy.Areas.Sysmgr.Controllers" }
            );
        }
    }
}
