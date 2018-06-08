
$(document).ready(function () {
    
//SCROLL

    $("a").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top;
        if ($.browser) {
            $('body').animate({ scrollTop: destination }, 1100); //1100 - скорость
        } else {
            $('html').animate({ scrollTop: destination }, 1100);
        }
        return false;
    });

    // HEADER

    var menu = new $('.nav-list'),
        menu_open = new $('.nav-btn'),
        menu_close = new $('.nav-btn-close'),
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

});