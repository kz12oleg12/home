<style>
    #gost .bl1-name h2 {
        text-align: left;
    }

    .gostc-txt p {
        font-size: 16px;
        color: gray;
        text-align: justify;
        padding: 15px 0;
    }

    #gost .owl-gs .item img {
        width: 100%;
        height: 250px;
    }

    #gost .owl-theme .owl-nav [class*=owl-] {
        color: rgb(250, 250, 250);
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

    #gost .owl-theme .owl-nav [class*=owl-prev] {
        left: 0%;
        width: 5%;
        justify-content: flex-end;
    }

    #gost .owl-theme .owl-nav [class*=owl-next] {
        right: 0%;
        width: 5%;
        justify-content: flex-start;
    }


    #gost .owl-theme .owl-nav [class*=owl-]:hover {
        background: transparent;
        color: #FFF;
        text-decoration: none;
        opacity: 1;
    }

    #gost .owl-carousel .item.h-1 {
        background: transparent url('/img/home/1.jpg') no-repeat center center;
        background-size: cover;
    }

    #gost .owl-carousel .item.h-2 {
        background: transparent url('/img/home/2.jpeg') no-repeat center center;
        background-size: cover;
    }

    #gost .owl-carousel .item.h-3 {
        background: transparent url('/img/home/3.jpeg') no-repeat center center;
        background-size: cover;
    }

    @media (max-width: 760px) {
        #gost .owl-theme .owl-nav [class*=owl-prev] {
            width: 10%;
        }

        #gost .owl-theme .owl-nav [class*=owl-next] {
            width: 10%;
        }
    }
</style>

<section id="gost">
    <div class="container">
        <div class="gs-name">
            <div class="row">
                <div class="col-12 col-md-auto">
                    <div class="bl1-name">
                        <h2>Гостиница</h2>
                    </div>
                </div>
                <div class="col">
                    <div class="b-name-l">
                        <div class="bl-line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gost-cont">
            <div class="gostc-txt">
                <p>
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов
                    на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров
                    и форм шрифтов, используя Lorem Ipsum для распечатки образцов.
                </p>
            </div>
            <div class="gostc-tb">
                <img src="/img/gost.PNG" alt="" width="100%">
            </div>

            <div class=" owl-gs owl-carousel owl-theme">
                <div class="item">
                    <img src="/img/gost/1.jpeg" alt="">
                </div>
                <div class="item">
                    <img src="/img/gost/2.jpeg" alt="">
                </div>
                <div class="item">
                    <img src="/img/gost/3.jpeg" alt="">
                </div>
                <div class="item">
                    <img src="/img/gost/4.jpeg" alt="">
                </div>
                <div class="item">
                    <img src="/img/gost/5.jpeg" alt="">
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    $('.owl-gs').owlCarousel({
        margin: 10,
        loop: true,
        navText: ['<i class="icon ion-ios-arrow-back fa-5x">', '<i class="icon ion-ios-arrow-forward fa-5x">'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
</script>