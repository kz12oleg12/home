
$(document).ready(function () {
    // ------------------------------------------------------------
    
    // HEADER
    $('.nav-menu').click(function () {
        $('.navbar-list').addClass('active');
        $('.jolk').addClass('active');
        $('body').addClass('stop');
    });
    $('.nv-cl').click(function () {
        $('.navbar-list').removeClass('active');
        $('.jolk').removeClass('active');
        $('body').removeClass('stop');
    });
    $('.jolk').click(function () {
        $('.navbar-list').removeClass('active');
        $('.jolk').removeClass('active');
        $('body').removeClass('stop');
    });
    $('.navbar .navbar-list li a').click(function () {
        $('.navbar-list').removeClass('active');
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


    // ------------------------------------------------------------
});
