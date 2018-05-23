// TOP
$('nav .nav-mb-mtn button').click(function(){
    $('nav ul.nav-list').addClass('active');
    $('.nv-fon').addClass('active');
    $('body').addClass('stop');
});

$('nav ul.nav-list li.close button').click(function(){
    $('nav ul.nav-list').removeClass('active');
    $('.nv-fon').removeClass('active');
    $('body').removeClass('stop');
});
$('nav ul.nav-list li a').click(function(){
    $('nav ul.nav-list').removeClass('active');
    $('.nv-fon').removeClass('active');
    $('body').removeClass('stop');
});
// SERVICES
var waypoint = new Waypoint({
    element: document.getElementById('services'),
    handler: function (direction) {
        $('#services .anim-left').addClass('animated bounceInLeft');
        $('#services .anim-right').addClass('animated bounceInRight');
    },
    offset: '35%'
})
//WORKING
var waypoint = new Waypoint({
    element: document.getElementById('working'),
    handler: function (direction) {
        $('#working .anim-left').addClass('animated bounceInLeft');
        $('#working .anim-right').addClass('animated bounceInRight');
    },
    offset: '15%'
})
