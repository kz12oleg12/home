<style>
    #home {
        border-bottom: 15px solid #333;
        overflow: hidden;
        position: relative;
        z-index: 1;
    }

    .background {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        background: gray url("/img/home.jpg") no-repeat center center;
        background-size: cover;
        z-index: -1;
    }

    .bgdark:after {
        background: rgba(53, 45, 47, 0.184) none repeat scroll 0 0;
        z-index: -1;
    }

    #main {
        display: flex;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        align-items: center;
    }

    .main-name {
        padding: 15px;
        background: rgba(29, 58, 70, 0.44);
        margin: 15px;
    }

    .main-name h2 {
        font-size: 23px;
        color: white;
        /* font-weight: 600; */
        margin: 15px 0;
        text-transform: uppercase;
    }

    .main-name p {
        color: white;
        font-size: 20px;
        margin: 15px 0;
    }

    .main-name-lin {
        width: 100%;
        height: 5px;
        background: white;
    }

    #home .owl-carousel {
        z-index: -1;
        height: 100%;
    }

    #home .owl-carousel .owl-stage-outer {
        height: 100%;
    }

    #home .owl-carousel .owl-stage-outer .owl-stage {
        height: 100%;
    }

    #home .owl-carousel .owl-stage-outer .owl-stage .owl-item {
        height: 100%;
    }

    #home .owl-carousel .owl-stage-outer .owl-stage .owl-item .item {
        height: 100%;
    }

    .home-lg {
        position: absolute;
        right: 5%;
        top: 5%;
    }

    #home .owl-carousel .owl-dots.disabled,
    .owl-carousel .owl-nav.disabled {
        display: block;
    }



    #home .owl-theme .owl-nav [class*=owl-] {
        color: rgba(29, 58, 70, 0.44);
        font-size: 14px;
        margin: 0;
        padding: 0;
        background: transparent;
        cursor: pointer;
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        z-index: 2;
        opacity: 0.5;
        transition: ease, 0.5s;
    }

    #home .owl-theme .owl-nav [class*=owl-prev] {
        left: 0%;
        width: 5%;
        justify-content: flex-end;
    }

    #home .owl-theme .owl-nav [class*=owl-next] {
        right: 0%;
        width: 5%;
        justify-content: flex-start;
    }

    #home .owl-carousel .owl-dots {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 20%;
    }

    #home .owl-theme .owl-dots .owl-dot span {
        width: 15px;
        height: 15px;
        background: rgba(29, 58, 70, 0.44);

    }

    #home .owl-theme .owl-dots .owl-dot.active span,
    .owl-theme .owl-dots .owl-dot:hover span {
        background: white;
    }

    #home .owl-theme .owl-nav [class*=owl-]:hover {
        background: transparent;
        color: #FFF;
        text-decoration: none;
        opacity: 1;
    }

    #home .owl-carousel .item.h-1 {
        background: transparent url('/img/home/1.jpg') no-repeat center center;
        background-size: cover;
    }

    #home .owl-carousel .item.h-2 {
        background: transparent url('/img/home/2.jpg') no-repeat center center;
        background-size: cover;
    }

    #home .owl-carousel .item.h-3 {
        background: transparent url('/img/home/3.jpg') no-repeat center center;
        background-size: cover;
    }
    #home .owl-carousel .item.h-4 {
        background: transparent url('/img/home/4.jpg') no-repeat center center;
        background-size: cover;
    }
    #home .owl-carousel .item.h-5 {
        background: transparent url('/img/home/5.jpg') no-repeat center center;
        background-size: cover;
    }
    #home .owl-carousel .item.h-6 {
        background: transparent url('/img/home/6.jpg') no-repeat center center;
        background-size: cover;
    }
    .home-darck {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.138);
    }

    @media (max-width:1200px) {
        .main-name h2 {
            font-size: 30px;
        }
        .main-name p {
            font-size: 16px;
            text-align: justify;
        }
    }

    @media (max-width:760px) {
        .main-name h2,
        .main-name p {
            font-size: 14px;
        }
        .home-lg img {
            width: 70px;
            margin: 15px;
        }
        .home-lg {
            position: absolute;
            right: 5%;
            top: 10%;
        }
        #main {
            align-items: flex-end;
        }
        #home .owl-carousel .owl-dots {
            bottom: 15px;
            /* position: relative; */
        }

        #home .owl-theme .owl-dots .owl-dot span {
            width: 10px;
            height: 10px;
            background: rgba(29, 58, 70, 0.44);

        }
    }
</style>

<section id="home" class="bg">
    <div class="home-lg">
        <img src="/img/home-lg.png" alt="">
    </div>

    <div class="owl-carousel owl-theme">
        <div class="item h-1">
            <!-- <div class="home-darck"></div> -->
            <div id="main">
                <div class="container">

                </div>
            </div>
        </div>
        <div class="item h-2">
            <!-- <div class="home-darck"></div> -->
            <div id="main">
                <div class="container">

                </div>
            </div>
        </div>
        <div class="item h-3">
            <!-- <div class="home-darck"></div> -->
            <div id="main">
                <div class="container">

                </div>
            </div>
        </div>
        <div class="item h-4">
            <!-- <div class="home-darck"></div> -->
            <div id="main">
                <div class="container">

                </div>
            </div>
        </div>
        <div class="item h-5">
            <!-- <div class="home-darck"></div> -->
            <div id="main">
                <div class="container">

                </div>
            </div>
        </div>
        <div class="item h-6">
            <!-- <div class="home-darck"></div> -->
            <div id="main">
                <div class="container">
                    <img src="/img/logo.png" alt="" width="50%">
                </div>
            </div>
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
    $('.owl-carousel').owlCarousel({
        loop: true,
        items: 1,
        margin: 10,
        navText: ['<i class="icon ion-ios-arrow-back fa-4x">', '<i class="icon ion-ios-arrow-forward fa-4x">']

    })
</script>