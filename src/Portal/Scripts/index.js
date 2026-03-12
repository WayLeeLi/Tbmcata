$(window).load(function() {
    //Class Hover act
   $("ul.classList li a").hover(function () {
       $(this).find('figure span').stop().animate({
           "right": "0",
           "bottom": "0"
       }, 400);
   }, function () {
       $(this).find('figure span').stop().animate({
           "right": "-30px",
           "bottom": "-30px"
       }, 400);
   });


    if ($(window).width() < 700) {
        $('.slidesArea div a img, .slidesArea div img').each(function (index, img) {
            $(img).attr("src", $(img).data("mobile"));
        });
    }

    //For Banner width [Jssor Slider]
    var boxH, picP, picPW;
    var displayP, slidePicW, parkingW;
    picP = 0.41; // =565/1350
    picPhoneP = 1.09; // =765/700
    picPW = $(".header").width();
    if ($(window).width() < 700) {
       boxH = $(".header").width() * picPhoneP;
    }else{
       boxH = $(".header").width() * picP;
    }
    $("#slider1_container").width($(".header").width());
    $("#slider1_container").height(boxH);
    $(".slidesArea").width($(".header").width());
    $(".slidesArea").height(boxH);

    displayP = 1; //只出現1張
    slidePicW = $(".header").width(); //圖寬等於可視內容寬度(不含卷軸)
    parkingW = 0; //圖前方空隙0

    var options = {
        $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slideshow is auto playing, default value is false
        $AutoPlayInterval: 6000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $SlideDuration: 800, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
        $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
        $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)
        $SlideWidth: slidePicW, //[Optional] Width of every slide in pixels, the default is width of 'slides' container
        $SlideSpacing: 0, //Space between each slide in pixels
        $Cols: displayP, //Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
        $ParkingPosition: parkingW, //The offset position to park slide (this options applys only when slideshow disabled).

        $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        $SlideDuration: 500, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide , default value is 20

        $BulletNavigatorOptions: { //[Optional] Options to specify and enable navigator or not
            $Class: $JssorBulletNavigator$, //[Required] Class to create navigator instance
            $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 1, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1, //[Optional] Steps to go for each navigation request, default value is 1
            $Lanes: 1, //[Optional] Specify lanes to arrange items, default value is 1
            $SpacingX: 10, //[Optional] Horizontal space between each item in pixel, default value is 0
            $SpacingY: 8, //[Optional] Vertical space between each item in pixel, default value is 0
            $Orientation: 1 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
        },

        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
            $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 2, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1 //[Optional] Steps to go for each navigation request, default value is 1
        }
    };

    if($("#slider1_container img").length>0){
        var jssor_slider1 = new $JssorSlider$("slider1_container", options);
    }else{
        $("#slider1_container").hide();
    }

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales
    //while window resizing
    function ScaleSlider() {
        var parentWidth = $('#slider1_container').parent().width();
        if (parentWidth) {
            jssor_slider1.$ScaleWidth(parentWidth);
        } else
            window.setTimeout(ScaleSlider, 30);
    }
    //Scale slider after document ready
    ScaleSlider();

    //Scale slider while window load/resize/orientationchange.
    $(window).bind("resize", ScaleSlider);
    //responsive code end

    //Jssor Slider
    var _SlideshowTransitions = [
        //Fade
        {
            $Duration: 1200,
            $Opacity: 2
        }
    ];

    //Bottom AD
    var options2 = {
        $AutoPlay: true, //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $AutoPlaySteps: 5, //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
        $AutoPlayInterval: 6000, //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $PauseOnHover: 1, //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

        $ArrowKeyNavigation: true, //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
        $SlideDuration: 160, //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
        $MinDragOffsetToSlide: 20, //[Optional] Minimum drag offset to trigger slide , default value is 20
        $SlideWidth: 185, //[Optional] Width of every slide in pixels, default value is width of 'slides' container
        $SlideHeight: 75,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
        $SlideSpacing: 18, //[Optional] Space between each slide in pixels, default value is 0
        $Cols: 4, //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
        $ParkingPosition: 0, //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
        $UISearchMode: 1, //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
        $PlayOrientation: 1, //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
        $DragOrientation: 1, //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $Cols is greater than 1, or parking position is not 0)

        $ArrowNavigatorOptions: {
            $Class: $JssorArrowNavigator$, //[Requried] Class to create arrow navigator instance
            $ChanceToShow: 2, //[Required] 0 Never, 1 Mouse Over, 2 Always
            $AutoCenter: 2, //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
            $Steps: 1 //[Optional] Steps to go for each navigation request, default value is 1
        }
    };

    if($("#slider2_container img").length>0){
        var jssor_slider2 = new $JssorSlider$("slider2_container", options2);
    }else{
        $("#slider2_container").hide();
    }

});

