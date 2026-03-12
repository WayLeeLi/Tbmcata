// Side Menu Auto Height
jQuery(window).load(function () {
    var windowWidth = $(window).width();
    var windowHeight = $(window).height();
    var barHeight = 50 + 30; //topMenu:50px footer:30px;
    if (windowWidth < 768) {
        $(".sideMenu").height(windowHeight - 50); //只扣上方bar
    } else {
        $(".sideMenu").height(windowHeight - barHeight); //讓側邊選單和視窗等高
    }

    //指定需判斷的input加入對應的class名稱 (input樣式名稱, 寬, 高, 檔案尺寸大小)
    //For 只有尺寸限制
    //checkUploadImg($(".checkSize500kb"), "auto", "auto", 500);

    //For  寬高尺寸都要限制
    //checkUploadImg($(".limmainBanner"), 1920, 614, 2048);
    //checkUploadImg($(".limarticlimg"), 700, 476, 500);

    //判斷圖片寬、高、尺寸
    var _URL = window.URL || window.webkitURL;
    function checkUploadImg($inputN, imgW, imgH, imgS) {
        $inputN.change(function (e) {
            var fileP, imgP, sizeKBP;
            if ((fileP = this.files[0])) {
                imgP = new Image();
                sizeKBP = (fileP.size / 1024).toFixed(2);
                imgP.onload = function () {
                    if (imgW === "auto") {
                        var textword = "大小: " + sizeKBP + "kb";
                        var ruleword = "檔案限制" + imgS + "KB以下";
                        if (sizeKBP > imgS) {
                            $(".errorBox").click();
                            $("#error-confirm mark").text(textword);
                            $("#error-confirm span.uploadNote").text(ruleword);
                            $(".ui-icon-closethick").click(function () { $inputN.val(""); }); //關閉時清空上傳圖檔
                        }
                    } else {
                        if (this.width != imgW || this.height != imgH || sizeKBP > imgS) {
                            $(".errorBox").click();
                            var textword = "寬度: " + this.width + "px / 高: " + this.height + "px / 大小: " + sizeKBP + "kb";
                            var ruleword = "圖檔規範: 寬度:" + imgW + "px * 高" + imgH + "px ; 檔案限制" + imgS + "KB以下";
                            $("#error-confirm mark").text(textword);
                            $("#error-confirm span.uploadNote").text(ruleword);
                            $(".ui-icon-closethick").click(function () { $inputN.val(""); }); //關閉時清空上傳圖檔
                        }
                    }
                };
                imgP.onerror = function () {
                    alert("not a valid file: " + fileP.type);
                };
                imgP.src = _URL.createObjectURL(fileP);
            }
        });
    }

    //alert警告視窗-限制圖片
    $(".errorBox").click(function () {
        $("#error-confirm").dialog({
            position: { my: 'cneter', at: 'cneter' },
            resizable: true,
            width: 450,
            height: 220,
            modal: true
        });
    });

    //Side Menu Class Type [側邊選單樣式]
    var urlink = window.custom_location || window.location.href;

    if (urlink.indexOf("menu") != -1) {
        var mainNum = urlink.substr(urlink.indexOf("menu=") + 5, 1) - 1;  //判斷主Menu位置並取出=後面數字
        $("ul.list li.mainLink").eq(mainNum).find("span").click();
        if (urlink.indexOf("sub") != -1) {
            var subNum = urlink.substr(urlink.indexOf("sub=") + 4, 1) - 1;  //判斷子項目位置並取出=後面數字
            $("ul.list li.mainLink").eq(mainNum).find("ul li").eq(subNum).addClass("select");
        }
    }
});

$(document).ready(function () {
    //List open or close [Side Menu]
    $("#menu").treeview({
        unique: true, //展開一個，其他會關閉
        collapsed: true, //預設全部關閉
        animated: "fast",
        control: "#treecontrol",
        //persist: "cookie", //記憶cookie資料
        cookieId: "treeview-black"
    });

    //Side Menu Select 取消原本按下的樣式
    $(".list li").click(function (e) {
        $(this).addClass("open").siblings().removeClass("open collapsable");
    });

    //Side Menu Open
    $("#sideMenu").click(function (event) {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $(".sideMenu").stop().animate({
                "margin-left": "-100%"
            }, 400);
        } else {
            $(this).addClass('open');
            $(".sideMenu").stop().animate({
                "margin-left": "2%"
            },
                400,
                function () {
                    $(".sideMenu").stop().delay(50).animate({
                        "margin-left": "0%"
                    }, 50);
                });
        }
        return false;
    });

    //Function Bar
    $(".close").click(function (e) {
        $(".functionArea").animate({
            bottom: "-200px"
        }, 500);
        $(".openArea").delay(400).animate({
            height: "25px"
        }, 100);
    });

    $(".open").click(function (e) {
        $(".openArea").animate({
            height: "0px"
        }, 100);
        $(".functionArea").delay(100).animate({
            bottom: "0px"
        }, 500);

    });

    //Open Detail [For Language]
    $(".detailGroup h3").click(function (event) {
        if ($(this).find("a").hasClass('press')) {
            $(this).closest('section').find('ul').stop()
            .slideUp(400, function () {
                $(this).closest('section').addClass('detailClose')
                .find("h3 a").removeClass('press').addClass('notOpen');
            });
        } else {
            $(this).closest('section').find('ul').stop()
            .slideDown(400, function () {
                $(this).closest('section').removeClass('detailClose')
                .find("h3 a").addClass('press').removeClass('notOpen');
            });
        }
        return false;
    });

    //For Form validationEngine
    // binds form submission and fields to the validation engine
    if ($("body").has("input[type='submit']")) { //偵測有送出BTN的頁面才需執行驗證
        $.validationEngine.defaults.scroll = false;
        $('#formcontent').validationEngine('attach', {
            relative: true,
            promptPosition: 'topRight',
            onValidationComplete: function (form, status) {
                if ($("#formcontent").find('section').hasClass("detailClose")) {
                    $(".detailClose").find('.notOpen').click();
                    $("input[type='submit']").delay(400).show('400', function () {
                        $(this).click();
                    });
                } else {
                    if (status == true) {
                        return true;
                    };
                }
            }
        });
    };

    //Show Tip
    $(".tip").hover(function (e) {
        $(".tipBox").stop().slideDown(500);
    }, function (e) {
        $(".tipBox").stop().slideUp(100);
    });

    //Back to Previous Page x 回上一頁
    $(".btnBack").click(function () {
        parent.history.back();
        return false;
    });
    $(".btnBackto").click(function () {
        parent.history.back();
        return false;
    });

    //時間選擇視窗
    $('#startdate').datetimepicker({ "dateFormat": "yy-mm-dd", "timeFormat": "HH:mm:ss" });
    $('#enddate').datetimepicker({ "dateFormat": "yy-mm-dd", "timeFormat": "HH:mm:ss" });
    $('#pubdate').datetimepicker({ "dateFormat": "yy-mm-dd", "timeFormat": "HH:mm:ss" });
    $('#startbuilddate').datetimepicker({ "dateFormat": "yy-mm-dd", "timeFormat": "HH:mm:ss" });
    $('#endbuilddate').datetimepicker({ "dateFormat": "yy-mm-dd", "timeFormat": "HH:mm:ss" });
    $('#startpubdate').datetimepicker({ "dateFormat": "yy-mm-dd", "timeFormat": "HH:mm:ss" });
    $('#endpubdate').datetimepicker({ "dateFormat": "yy-mm-dd", "timeFormat": "HH:mm:ss" });
    $('#timers').timepicker({ "timeFormat": "HH:mm:ss" });
    $('#timere').timepicker({ "timeFormat": "HH:mm:ss" });
    $('#datanotime_1').datepicker({ "dateFormat": "yy-mm-dd" });
    $('#datanotime_2').datepicker({ "dateFormat": "yy-mm-dd" });
    $('#datanotime_3').datepicker({ "dateFormat": "yy-mm-dd" });
    $('#datanotime_4').datepicker({ "dateFormat": "yy-mm-dd" });

    ////刪除確認視窗
    //$(".icon-trash-bin").click(function () {
    //    $("#delete-confirm").dialog({
    //        position: { my: 'cneter', at: 'cneter' },
    //        resizable: true,
    //        height: 220,
    //        modal: true,
    //        buttons: {
    //            "確認刪除": function () {
    //                $(this).dialog("close");
    //                //這裡放置按下刪除時要進行的動作
    //            },
    //            "取消": function () {
    //                $(this).dialog("close");
    //            }
    //        }
    //    });
    //});

    ////刪除全部確認視窗
    //$(".delete").click(function () {
    //    $("#deleteall-confirm").dialog({
    //        position: { my: 'cneter', at: 'cneter' },
    //        resizable: true,
    //        height: 220,
    //        modal: true,
    //        buttons: {
    //            "確認刪除": function () {
    //                $(this).dialog("close");
    //                //這裡放置按下刪除時要進行的動作
    //            },
    //            "取消": function () {
    //                $(this).dialog("close");
    //            }
    //        }
    //    });
    //});

    ////複製確認視窗
    //$(".icon-copy").click(function () {
    //    $("#copy-confirm").dialog({
    //        position: { my: 'cneter', at: 'cneter' },
    //        resizable: true,
    //        height: 220,
    //        modal: true,
    //        buttons: {
    //            "確認複製": function () {
    //                $(this).dialog("close");
    //                //這裡放置按下刪除時要進行的動作
    //            },
    //            "取消": function () {
    //                $(this).dialog("close");
    //            }
    //        }
    //    });
    //});
    ////重發信確認視窗
    //$(".icon-mail-read").click(function () {
    //    $("#resend-confirm").dialog({
    //        position: { my: 'cneter', at: 'cneter' },
    //        resizable: true,
    //        height: 220,
    //        modal: true,
    //        buttons: {
    //            "確認重發": function () {
    //                $(this).dialog("close");
    //                //這裡放置按下刪除時要進行的動作
    //            },
    //            "取消": function () {
    //                $(this).dialog("close");
    //            }
    //        }
    //    });
    //});

});


function ExportHtml(obj, title) {
    var tempObj = obj.clone();
    tempObj.find(".export_Ignore").each(function () {
        $(this).remove();
    });
    var html = tempObj.html();
    html = html.replace(/href/g, "_href").replace(/input/g, "span").replace(/textarea/g, "span").replace(/<table/g, "<table border='1'");

    // 創建Form  
    $("body#export_form").remove();
    var form = $('<form id="export_form"></form>');
    // 設置屬性  
    form.attr('action', "/Home/Export");
    form.attr('method', 'post');
    // 創建Input  
    var contentHtml = $('<input type="hidden" value=' + escape(html) + ' name="export_content" />');
    var titleHtml = $('<input type="hidden" value=' + escape(title) + ' name="export_title" />');

    // 附加到Form  
    form.append(contentHtml);
    form.append(titleHtml);

    $("body").append(form);
    form.submit();
}