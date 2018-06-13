resize();

window.onresize = resize;

function resize() {
    var height = document.documentElement.clientHeight - 130;
    var width = document.documentElement.clientWidth;
    var home = $('#home');
    var main = $(".main");


    if (height * 3 < width) {
        height = 400;
    } else if (height < 310) {
        height = 400;
    } else if (height + 100 > width) {
        height = width + 100;
    }

    height2 = (height / 0) - 10 | 0;
    home.css("height", height + 'px');
    if (width < 450)
        main.css("margin-top", '10px');
    else
        main.css("margin-top", height2 + 'px');
}
