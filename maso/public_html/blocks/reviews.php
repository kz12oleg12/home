<style>
    .ks-name.fon {
        background-color: #0d8aff;
    }
    
    .ks-name.fon h2 {
        padding: 10px;
    }
    
    .ks-otz {
        margin: 30px;
    }
    
    .ks-otz h2 {
        text-align: center;
        padding: 15px;
        font-weight: 600;
        color: #0d8aff;
    }
    
    .ks-otz p {
        padding: 15px 15%;
        text-align: center;
        font-size: 18px;
        line-height: 1.5;
        color: #7991a9;
    }
    @media screen and (max-width: 800px) {
        .ks-otz p{
            padding: 15px;
            font-size: 12px;
        }
    }
</style>

<section id="kaspiokna-9">
    <div class="ks-name fon in">
        <h2>Отзывы
            <b>наших клиентов</b>
        </h2>
    </div>
    <div class="ks-otz">
        <div class="owl-carousel owl-theme ks-otz-slider">
            <div class="item">
                <div class="container">
                    <h2>Boby Bob Balwer</h2>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
                        форм шрифтов, используя Lorem Ipsum для распечатки.</p>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <h2>Boby Bob Balwer</h2>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
                        форм шрифтов, используя Lorem Ipsum для распечатки.</p>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <h2>Boby Bob Balwer</h2>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
                        форм шрифтов, используя Lorem Ipsum для распечатки.</p>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <h2>Boby Bob Balwer</h2>
                    <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и
                        форм шрифтов, используя Lorem Ipsum для распечатки.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $('.ks-otz-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
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
    });
</script>