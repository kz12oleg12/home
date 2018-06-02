$('.park-sm-slide1').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText:['<i class="icon ion-ios-arrow-back fa-2x">','<i class="icon ion-ios-arrow-forward fa-2x">'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
    }
})