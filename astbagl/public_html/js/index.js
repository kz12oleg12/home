// BL_1

var width = document.documentElement.clientWidth;
if(width > 992){
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene, {
        relativeInput: true
    });
}

$('.sml').addClass('animated zoomInRight');
// BL_2
var scene2 = document.getElementById('scene2');
var parallaxInstance = new Parallax(scene2, {
    relativeInput: true
});
// BL_3
var scene3 = document.getElementById('scene3');
var parallaxInstance = new Parallax(scene3, {
    relativeInput: true
});
// BL_4
var waypoint = new Waypoint({
    element: document.getElementById('bl_4'),
    handler: function (direction) {
        $('#bl_4 .gerl').addClass('animated slideInLeft');
    },offset:'30%'
});
// BL_5
var waypoint = new Waypoint({
    element: document.getElementById('bl_5'),
    handler: function (direction) {
        $('#bl_5 .gerl').addClass('animated slideInLeft');
    },offset:'30%'
});
// $('#bl_5 .gerl').addClass('animated slideInLeft');
// BL_5
var waypoint = new Waypoint({
    element: document.getElementById('bl_7'),
    handler: function (direction) {
        $('#bl_7 .gerl').addClass('animated slideInLeft');
    },offset:'30%'
});
// TOP
var waypoint = new Waypoint({
    element: document.getElementById('bl_1'),
    handler: function (direction) {
        $('header').toggleClass('active');
        // alert('asdasd')
    },offset:'-50%'
});



