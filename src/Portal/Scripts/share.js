$(window).load(function() {
	if ($(window).width() < 769) {
		$(".menu").height($(window).height());
	}

});

$(function () {
	//sideMenu Open
	if ($(window).width() < 901) {
		$("ul.sideList .select a:eq(0)").click(function(event) {
			if($(this).hasClass("open")){
				$(this).closest("li").find("ul li").css({"display":"none"});
				$(this).removeClass("open");
			}else{
				$(this).closest("li").find("ul li").css({"display":"block"});
				$(this).addClass("open");
			}

			return false;
		});
	}

	// Open Menu
	$(".icon-menu").click(function(event) {
		if($(this).hasClass("open")){
			$(".menu").stop().animate({ "left":"-260px"}, 400, function() {
				$(".icon-menu").removeClass('open');
				$(".menu").css({"box-shadow":"0px 0px 0px 0px #333"});
			});
			$(".calendarInside").stop().animate({ "margin-left":"0"}, 400);
			$("body").stop().animate({ "right":"0px", "left":"0px"}, 400, function() {
				$("body").removeClass('slideopen');
			});
		}else{
			$(".menu").stop().animate({ "left":"0"}, 400, function() {
				$(".icon-menu").addClass('open');
				$(".menu").css({"box-shadow":"3px 0px 10px 0px #333"});
			});
			$(".calendarInside").stop().animate({ "margin-left":"-40px"}, 400);
			$("body").stop().animate({ "left":"260", "right":"-260px"}, 400, function() {
				$("body").addClass('slideopen');
			});
			//Submenu Open
			$(".menu ul li  a.mainLink").click(function(event) {
				if($(this).closest("li").hasClass("slide")){
					$(this).closest("li").find("ul").stop().slideUp(400,function(){
						$(this).closest("li").removeClass("slide");
					});
				}else{
					$(this).closest("li").find("ul").stop().slideDown(400,function(){
						$(this).closest("li").addClass("slide");
					});
				}
				return false;
			});
		}
		return false;
	});

	//Open Search
	if ($(window).width() < 500) {
		$(".icon-search").click(function(event) {
			$(".searchBox").css({"overflow":"visible"}).stop().animate({ "width":"160px","opacity": "1"}, 400, function() {
				$(".icon-search").addClass('open');
			});
			if($(".icon-language").hasClass("open")){
				$(".language").stop().animate({ "width":"0"}, 400, function() {
					$(".icon-language").removeClass('open');
				});
			}
			$(".searchSubmit").click(function(event) {
				if($('.searchInput').val()==""){
					$(".searchBox").css({"overflow":"hidden"}).stop().animate({ "width":"0","opacity": "0"}, 400, function() {
						$(".icon-search").removeClass('open');
					});
				}else{
					$("form.searchBox").submit();
				}
				return false;
			});
			return false;
		});
	}else{
		$(".icon-search").click(function(event) {
			$(".searchBox").css({"overflow":"visible"}).stop().animate({ "width":"160px","opacity": "1"}, 400, function() {
				$(".icon-search").addClass('open');
			});
			if($(".icon-language").hasClass("open")){
				$(".language").stop().animate({ "width":"0"}, 400, function() {
					$(".icon-language").removeClass('open');
				});
			}
			$(".searchSubmit").click(function(event) {
				if($('.searchInput').val()==""){
					$(".searchBox").css({"overflow":"hidden"}).stop().animate({ "width":"0","opacity": "0"}, 400, function() {
						$(".icon-search").removeClass('open');
					});
				}else{
					$("form.searchBox").submit();
				}
				return false;
			});
			return false;
		});
	}

	//Open Language
	if ($(window).width() < 500) {
		$(".icon-language").click(function(event) {
			$(".searchBox").css({"overflow":"hidden"}).stop().animate({ "width":"0","opacity": "0"}, 400, function() {
				$(".icon-search").removeClass('open');
			});
			if($('.searchInput').val()==""){
				$(".searchBox").css({"overflow":"hidden"}).stop().animate({ "width":"0","opacity": "0"}, 400, function() {
					$(".icon-search").removeClass('open');
				});
			}
			if($(this).hasClass("open")){
				$(".language").stop().animate({ "width":"0"}, 400, function() {
					$(".icon-language").removeClass('open');
				});
			}else{
				$(".language").stop().animate({ "width":"90px"}, 400, function() {
					$(".icon-language").addClass('open');
				});
			}

			return false;
		});
	}else{
		$(".icon-language").click(function(event) {
			$(".searchBox").css({"overflow":"hidden"}).stop().animate({ "width":"0","opacity": "0"}, 400, function() {
				$(".icon-search").removeClass('open');
			});
			if($(this).hasClass("open")){
				$(".language").stop().animate({ "width":"0"}, 400, function() {
					$(".icon-language").removeClass('open');
				});
			}else{
				$(".language").stop().animate({ "width":"90px"}, 400, function() {
					$(".icon-language").addClass('open');
				});
			}

			return false;
		});
	}


	//Close Map
	$(".mapBox .icon-delete").click(function(event) {
		$(this).closest('section').stop().fadeOut(400);
		return false;
	});
	//判斷燈箱以外範圍點擊時要關閉
	if($(".mapArea")){
	  $('.mapArea').click(function(evt) {
	      if($(evt.target).parents(".mapArea").length==0 &&
	          evt.target.cass != "mapArea") {
	          $(".mapArea").stop().fadeOut(400);
	      }
	  });
	}
});

//Change CN Language [For Language]
window.onload = function () {
	if (Cookie.Get("la") == "t"){
		setTimeout(function () { stTransform(true); document.getElementById("st").innerHTML = "简体中文"; }, 100);
	}
	if (Cookie.Get("la") == "s"){
		setTimeout(function () { stTransform(false); document.getElementById("st").innerHTML = "繁體中文"; }, 100);
	}
}