$(document).ready(function(){
    $(".loginbox").animate({top:"50%"}, 800);
    $(".loginbox").animate({top:"45%"}, 200);
    $(".loginboxShadow").animate({bottom:"15%"}, 800);
    $(".loginboxShadow").animate({bottom:"10%"}, 200);
    $("footer").delay( 800 ).animate({opacity: 1}, 500);

    //Form
    $.validationEngine.defaults.scroll = false;
    $('#formcontent').validationEngine();
});