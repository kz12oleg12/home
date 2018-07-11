
$(document).ready(function () {
    // ------------------------------------------------------------


    // HEADER
    $('.nav-menu').click(function () {
        $('nav.md').addClass('active');
        $('.jolk').addClass('active');
        $('body').addClass('stop');
    });
    $('.nv-cl').click(function () {
        $('nav.md').removeClass('active');
        $('.jolk').removeClass('active');
        $('body').removeClass('stop');
    });
    $('.jolk').click(function () {
        $('nav.md').removeClass('active');
        $('.jolk').removeClass('active');
        $('body').removeClass('stop');
    });
    $('nav.md li a').click(function () {
        $('nav.md').removeClass('active');
        $('.jolk').removeClass('active');
        $('body').removeClass('stop');
    });

  


    // HOME
    $('.owl-carousel.home_sl').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navText: ['<i class="material-icons">keyboard_arrow_left</i>', '<i class="material-icons">keyboard_arrow_right</i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 3
            }
        }
    });

    // if (document.body.clientWidth > 767) {
    //     alert(123)
    // }
    // ------------------------------------------------------------
});
