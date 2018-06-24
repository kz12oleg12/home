
$(document).ready(function () {

    //SCROLL

    // $("a").click(function () {
    //     var elementClick = $(this).attr("href");
    //     var destination = $(elementClick).offset().top;
    //     if ($.browser) {
    //         $('body').animate({ scrollTop: destination }, 1100); //1100 - скорость
    //     } else {
    //         $('html').animate({ scrollTop: destination }, 1100);
    //     }
    //     return false;
    // });

    // HEADER

    var menu = new $('.nav-list'),
        menu_open = new $('.menu_btn'),
        menu_close = new $('.menu_close'),
        jolk = new $('.jolk'),
        body = new $('body')

    menu_open.click(function () {
        menu.addClass('active');
        jolk.addClass('active');
        body.addClass('stop');
    });
    menu_close.click(function () {
        menu.removeClass('active');
        jolk.removeClass('active');
        body.removeClass('stop');
    });
    jolk.click(function () {
        menu.removeClass('active');
        jolk.removeClass('active');
        body.removeClass('stop');
    });

    var waypoint = new Waypoint({
        element: document.getElementById('main'),
        handler: function (direction) {
            $('.div-nav').toggleClass('active');
        }
    })


      

    // SERVICES

    var sr_menu_btn = new $('.nav-servis .menu button'),
        sr_nemu = new $('.nav-servis');

    sr_menu_btn.click(function () {
        sr_nemu.toggleClass('active');
        $('.nav-servis li.menu button').toggleClass('active');
    });

    $('.nav-servis li a').click(function () {
        sr_nemu.removeClass('active');
        $('.nav-servis li.menu button').removeClass('active');
    });
});