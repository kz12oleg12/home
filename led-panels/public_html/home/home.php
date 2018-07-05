<link rel="stylesheet" href="/css/styles/home.css">

<section id="home">
    <div class="owl-carousel home-sl owl-theme">
        <div class="item">
            <!-- <img src="/img/home.jpg" alt="" width="100%"> -->
            <div class="hd-itm">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="hd-feedback d-none d-md-block">
                                <h2>Консультация бесплатно</h2>
                                <form action="">
                                    <input type="text" placeholder="Ваше имя">
                                    <input type="text" placeholder="Телефон">
                                    <input type="button" value="Отправить">
                                </form>
                            </div>
                        </div>
                        <div class="col-12 order-md-first">
                            <div class="cont_md">
                                <h2>Наши цены дешевле на 7-12%</h2>
                                <h2>Собирается в Казахстане</h2>
                                <div class="cont_md_lin"></div>
                                <p>Изготовление и монтаж светодиондной продукции в РК и РФ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="/img/im/1.jpg" alt="">
        </div>
        <div class="item">
            <img src="/img/im/2.jpg" alt="">
        </div>
        <div class="item">
            <img src="/img/im/3.jpg" alt="">
        </div>
        <div class="item">
            <img src="/img/im/4.jpg" alt="">
        </div>
        <div class="item">
            <img src="/img/im/5.jpg" alt="">
        </div>
    </div>
</section>
<div class="hd-feedback md d-md-none">
    <h2>Консультация бесплатно
        <i class="material-icons">arrow_drop_down</i>
    </h2>
    <form action="">
        <input type="text" placeholder="Ваше имя">
        <input type="text" placeholder="Телефон">
        <input type="button" value="Отправить">
    </form>
</div>
<script src="/js/resize.js"></script>

<script type="text/javascript">
    window.onload = function () {
        document.body.className += ' loaded'
    };
</script>

<script>
    $('.owl-carousel.home-sl').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        items: 1,
    })
</script>