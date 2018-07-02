<link rel="stylesheet" href="/css/styles/home.css">

<section id="home">
    <div class="owl-carousel home-sl owl-theme">
        <div class="item">
            <!-- <img src="/img/home.jpg" alt="" width="100%"> -->
            <div class="hd-itm">
                <div class="container">
                    <div class="hd-feedback">
                        <h2>Консультация бесплатно</h2>
                        <form action="">
                            <input type="text" placeholder="Ваше имя">
                            <input type="text" placeholder="Телефон">
                            <input type="button" value="Отправить">
                        </form>
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
    })
</script>