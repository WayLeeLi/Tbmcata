$(function () {

    $('#navbar-collapse-1 ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
        // Avoid following the href location when clicking

        event.preventDefault();
        // Avoid having the menu to close when clicking
        event.stopPropagation();
        // Re-add .open to parent sub-menu item
        $(this).parent().addClass('open');
        //$(this).parent().find("ul").parent().find("li.dropdown").addClass('open');
        $(this).parent().parent().parent().addClass('open');

    });

    $('.gototop').hide();
    $(".gototop").click(function () {
        jQuery("html,body").animate({
            scrollTop: 0
        }, 1000);
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.gototop').fadeIn("fast");
        } else {
            $('.gototop').stop().fadeOut("fast");
        }
    });

    $('.manufacture-banner .owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: true,
        autoplay: false,
        autoPlaySpeed: 3000,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });


    $(".ad .owl-carousel").owlCarousel({
        nav: true,
        responsiveClass: true,
        loop: true,
        dots: false,
        autoplay: false,
        autoPlaySpeed: 3000,
        autoPlayTimeout: 3000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1
            },
            768: {
                items: 3
            },
            992: {
                items: 3
            },
            1024: {
                items: 5
            },
            1280: {
                items: 5

            },
            1440: {
                items: 5
            },
        }
    });

    if ($(window).width() < 768) {
        $('ul.navbar-nav.menu_bar').append($('.mnavbar.mn-collapse'));
        $('ul.navbar-nav.menu_bar').append($('.msearch'));

    }

});
