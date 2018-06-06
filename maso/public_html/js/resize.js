resize();

window.onresize = resize;

function resize() {
    var height = document.documentElement.clientHeight - 50;
    var width = document.documentElement.clientWidth;
    var home = document.getElementById("home");
    var main = document.getElementById("main");


    if (height * 3 < width) {
        height = 400;
    } else if (height < 310) {
        height = 400;
    } else if (height + 100 > width) {
        height = width + 100;
    }

    height2 = (height / 4) - 0 | 0;
    home.style.height = height + 'px';
    if (width < 450)
        main.style.marginTop = '10px';
    elsee
        main.style.marginTop = height2 + 'px';
}