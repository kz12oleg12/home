<link rel="stylesheet" href="/css/bl/bl_1.css">

<section id="bl_1" class="bl">

    <div class="bl-container">
        <div data-relative-input="true" id="scene" class="main">
            <div data-depth="0.3">
                <div class="sml">
                    <img src="/img/sm.svg" alt="">
                </div>
            </div>
        </div>
        <div class="cont">
            <div class="cont-ls">
                <div class="name">
                    <h1>Компания</h1>
                    <h1 class="light">"Astana Business Aviation"</h1>
                </div>
                <form action="">
                    <div class="inp">
                        <div class="inp-icon">
                            <!-- <i class="icon ion-md-person fa-lg"></i> -->
                            <i class="pe-7s-user fa-lg"></i>
                        </div>
                        <input type="text" placeholder="Ваше имя">
                    </div>
                    <div class="inp">
                        <div class="inp-icon">
                            <!-- <i class="icon ion-md-call fa-lg"></i> -->
                            <i class="pe-7s-call fa-lg"></i>
                        </div>
                        <input type="text" placeholder="Телефон">
                    </div>
                    <div class="inp">
                        <input type="button" value="БЕСПЛАТНЫЙ ПОДБОР РЕЙСА">
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<script>
    $('.sml').addClass('animated zoomInRight');

    var N = 5000; // 5 секунд

    setInterval(function () {
        $('.telephone').toggleClass('animated tada');
    }, N);
    
</script>
<script>
    var scene = document.getElementById('scene');
    var parallaxInstance = new Parallax(scene, {
        relativeInput: true
    });
</script>