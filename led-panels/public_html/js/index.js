
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
    jolk.click(function () {
        menu.removeClass('active');
        jolk.removeClass('active');
        body.removeClass('stop');
    });
    // ABOUT

    // ADVANTAGS
    var waypoint = new Waypoint({
        element: document.getElementById('advantags'),
        handler: function (direction) {
            $('.ad-name').addClass('animated slideInLeft')
        },
        offset: '70%'
    });

    // SERVICES

    var waypoint = new Waypoint({
        element: document.getElementById('services'),
        handler: function (direction) {
            $('#services .ser_img img').addClass('animated slideInRight');
        },
        offset: '70%'
    });

    // PRICH
    var waypoint = new Waypoint({
        element: document.getElementById('prich'),
        handler: function (direction) {
            $('.prich-name').addClass('animated slideInLeft');
            $('#prich .content li').addClass('active animated fadeIn');

        },
        offset: '70%'
    });
    // RANGE

    var waypoint = new Waypoint({
        element: document.getElementById('range'),
        handler: function (direction) {
            $('.range-name').addClass('animated slideInLeft')
        },
        offset: '70%'
    });

    var pup = $('.pupup'),
        pup_cd = $('.pupup .card'),
        pup_close = $('.pupup .card .pupup-close'),
        pup_bg = $('.pupup_baground'),
        rg_btn_1 = $('.item-1'),
        rg_dop_md = $('.range_dop_medium'),
        rg_dop_max = $('.range_dop_max'),
        rg_dop_btn = $('.range-btn button'),
        rg_dop_btn_a = $('.range-btn button.active'),
        row = 1




    rg_btn_1.click(function () {
        pup.addClass('active');
        pup_cd.addClass('animated zoomIn');
        $('body').addClass('stop');
    });

    pup_close.click(function () {
        pup.removeClass('active');
        pup_cd.removeClass('animated zoomIn');
        $('body').removeClass('stop');
    });

    pup_bg.click(function () {
        pup.removeClass('active');
        pup_cd.removeClass('animated zoomIn');
        $('body').removeClass('stop');
    });

    $('.range-btn button.up').click(function () {
        $('.range-btn button.up').removeClass('active');
        rg_dop_md.removeClass('active');
        $('.rg-bt').removeClass('active');
        rg_dop_max.removeClass('active');
        rg_dop_md.removeClass('animated fadeIn');
        rg_dop_max.removeClass('animated fadeIn');
        row = 1;
    });

    // _________________________________________________________________



    $('.rg-bt').click(function () {

        if (row == 1) {
            rg_dop_md.addClass('animated fadeIn');

            rg_dop_md.addClass('active');
            $('.range-btn button.up').addClass('active');

            row++;


        } else if (row == 2) {
            rg_dop_max.addClass('animated fadeIn');

            rg_dop_max.addClass('active');
            $('.rg-bt').addClass('active');

            row++;

        } else if (row == 3) {
            rg_dop_md.removeClass('animated fadeIn');
            rg_dop_max.removeClass('animated fadeIn');

            rg_dop_max.removeClass('active');
            rg_dop_md.removeClass('active');
            $('.rg-bt').removeClass('active');
            $('.range-btn button.up').removeClass('active');

            row = 1;
        }
    });



    // WORK
    var waypoint = new Waypoint({
        element: document.getElementById('work'),
        handler: function (direction) {
            $('.work-name').addClass('animated slideInLeft')
        },
        offset: '70%'
    });

    // PORTFOLIO
    $('.owl-carousel.portfolio-sl').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
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

    var waypoint = new Waypoint({
        element: document.getElementById('portfolio'),
        handler: function (direction) {
            $('.portfolio-name').addClass('animated slideInLeft');
            $('#portfolio .owl-carousel .item img').addClass('animated slideInLeft');
            $('#portfolio .content .card').addClass('animated slideInRight');
        },
        offset: '50%'
    });
    // $('.owl-carousel.portfolio-sl .owl-nav').removeClass('disabled');
    // $('.owl-carousel.portfolio-sl .owl-dots').removeClass('disabled');
    // ---------------------------------------------
});