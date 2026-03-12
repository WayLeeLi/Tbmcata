$(window).load(function() {
	//News Hover act
	$("ul.newsInsideList li a, ul.learnInsideList li a").hover(function () {
	    $(this).find('figure div span').stop().animate({
	        "right": "0",
	        "bottom": "0"
	    }, 400);
	}, function () {
	    $(this).find('figure div span').stop().animate({
	        "right": "-30px",
	        "bottom": "-30px"
	    }, 400);
	});
	//Teacher Link to There's Info
	var urlink = window.location.href;
	if(urlink.indexOf("#t_")!=-1){
		var teacherTotal = urlink.length - urlink.indexOf("#t_")-3;
		var teacherNum = urlink.substr(urlink.indexOf("#t_")+3, teacherTotal);  //判斷主Menu位置並取出=後面數字
		var item = "#t_"+ teacherNum;
		$.each($("ul.teacherTab li figure a"), function(){
	          if($(this).attr("href")==item){
	            $(this).click();
	          }
	       });
	}
});
$(function () {
	//Class Click
	$(".table6Column ul").click(function() {
		if($(this).index()>0){
			var classLink = $(this).find("li").eq(0).find("a").attr("href");
			window.location = classLink;
		}
	});
	//Mark Link (Go to genre List)
	$("ul.learnInsideList li a mark, ul.videoList li a mark, .mainContent ul.albumList li mark").click(function() {
		var genreLink = $(this).attr("genre");
		window.location = genreLink;
		return false;
	});
	//Open Calendar
	$(".icon-school-calendar").click(function() {
		if($(this).hasClass("open")){
			$(".calendarInside").stop().animate({
				"left": "-280"}, 400, function() {$(".icon-school-calendar").removeClass('open');
			});
		}else{
			$(".calendarInside").stop().animate({
				"left": 0}, 400, function() {$(".icon-school-calendar").addClass('open');
			});
		}
		return false;
	});

	//Back to Previous Page
	$(".btnBack").click(function() {
		parent.history.back();
		return false;
	});

	//Class Position Map
	$(".where").click(function() {
		var position = $(this).attr("href");
		$(position).stop().fadeIn(400);
		$('.icon-chevron-up').click();
		return false;
	});

	//Teacher Change Info
	$("ul.teacherTab li figure a").click(function() {
		$("ul.teacherTab li").removeClass("select");
		$(this).closest("li").addClass("select");
		$(".teacherContent").stop().slideUp(400);
		var teacher = $(this).attr("href");
		$(teacher).stop().slideDown(400);
		//return false;
	});
});

