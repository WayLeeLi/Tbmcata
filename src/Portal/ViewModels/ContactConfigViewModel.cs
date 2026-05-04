using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace Academy.ViewModels
{
    public class ContactConfigViewModel
    {
        [Display(Name = "地址")]
        public string Address { get; set; }

        [Display(Name = "電話")]
        public string Phone { get; set; }

        [Display(Name = "電子信箱")]
        public string Email { get; set; }

        [Display(Name = "傳真")]
        public string Fax { get; set; }

        // 移除經度、緯度，改為地圖URL
        [Display(Name = "地圖嵌入網址")]
        [DataType(DataType.Url)]
        public string MapUrl { get; set; }

        [Display(Name = "線上預約說明")]
        public string OnlineBookingText { get; set; }

        [Display(Name = "訂位詢問")]
        public string BookingInquiry { get; set; }

        [Display(Name = "營業時間")]
        public string BusinessHours { get; set; }

        [Display(Name = "交通指引")]
        public string TrafficGuide { get; set; }
    }
}