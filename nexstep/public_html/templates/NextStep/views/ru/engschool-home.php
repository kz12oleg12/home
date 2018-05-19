<style>
    @font-face {
        /* Имя шрифта */
        font-family: ArialMT;
        /* Путь к файлу со шрифтом */
        src: url(font/8665.ttf);
    }
    body {
        margin: 0;
    }
    body.loaded {
        opacity: 1;
        transition: 1s opacity;
    }

    .hd {
        text-align: center;
        box-shadow: 0 0 5px #000 inset;
        padding: 100px 0px;
        color: #fff;
        position: relative;
        overflow: hidden;
        backface-visibility: hidden;
    }
    .hd .background {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
        transform: translate3d(0, 0, 0) scale(1.25);
        background: gray url("/images/engschool-home.jpg") no-repeat center center;
        background-size: cover;
    }
    .loaded .hd .background {
        transform: scale(1);
        transition: 6.5s transform;
    }
    .hd>* {
        position: relative;
        z-index: 10;
    }
    .hd h1 {
        font-size: 40px;
    }

    .hd h2 {
        font-size: 25px;
        padding: 10px 0;
    }
    #main .sub {
    	padding-bottom: 20px;
    	color: #f9ff00;
		font-weight: bold;
		text-shadow: 0px 0px 5px #2f3e35;
    }
    
    #main {
        position: absolute;
        top: 0;
        bottom: 0;
        display: flex;
        align-items: center;
    }
    
    #main h2 {
        font-size: 50px;
        color: white;
    }
    
    #main p {
        font-size: 18px;
        color: white;
        line-height: 25px;
    }
    
    .bgdark:after {
        background: rgba(53, 45, 47, 0.384) none repeat scroll 0 0;
        content: "";
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }
    
    .home-txt-pad {
        padding: 0 10%;
        text-align: left;
    }

    .home-card {
        display: flex;
        align-items: center;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        justify-content: center;
    }

    .home-card-fon {
        background-color: white;
        height: 80%;
        width: 50%;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.63);
    }

    .home-card-name {
        padding: 15px;
        background-color: orange;
        text-align: center;
        font-size: 22px;
        text-transform: uppercase;
    }

    .home-cont {
        padding: 15% 0;
    }

    button.btm-home {
        padding: 10px 25px;
        margin: 15px 0;
        background-color: orange;
        border: navajowhite;
        text-transform: uppercase;
        font-weight: 700;
        color: white;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 3px;
        cursor: pointer;
        border: 1px solid transparent;
        transition: 0.5s;
        font-size: 16px;
    }

    button.btm-home:hover {
        border: 1px solid orange;
        background-color: white;
        color: orange;
        transition: 0.5s;
    }

    .home-form {
        position: relative;
        height: 80%
    }

    .home-form-container {
        text-align: center;
        padding: 15px;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #cc880b;

    }

    .home-form form input {
        border: 1px solid #212121;
        padding: 5px 10px;
        margin: 5px 0;
        border-radius: 50px;
        width: 100%;
        max-width: 200px;
    }

    .home-form form input[type="button"] {
        margin: 30px 0;
        text-transform: uppercase;
    }

    .home-form form input[type="button"] {
        margin: 30px 0;
        text-transform: uppercase;
        background: orange;
        border: 1px solid orange;
        color: white;
    }

    .home-form form input[type="button"]:hover {

        background: white;
        color: orange;
        cursor: pointer;
        transition: 0.5s;
    }

    .ht-l {
        width: 50%;
    }

    .ht-r {
        width: 50%;
        position: relative;
    }

    .ht-r.active {
        display: block;
        position: fixed;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10;
    }

    .ht-r.active .home-card-name {
        display: none;
    }

    .home-btn-ob {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
    }

    .home-btn-ob button {
        width: 100%;
        text-align: center;
        text-transform: uppercase;
        font-weight: 400;
        font-size: 18px;
        background: orange;
        color: white;
        border: 1px solid orange;
        padding: 15px;
        display: none;
    }

    .home-btn-ob-close {
        position: absolute;
        left: 0;
        right: 0;
        text-align: center;
        display: flex;
        justify-content: center;
    }

    .home-btn-ob-close button {
        border: none;
        background: transparent;
        display: none;
    }

    @media screen and (max-width: 600px) {
        #main h1 {
            font-size: 55px;
        }
        #main h2 {
            font-size: 20px;
        }
        .hd {
            padding: 40px 0px;
        }
        #main {
            margin-top: 0;
        }
        #main h2 {
            font-size: 30px;
            color: white;
        }
        #main p {
            font-size: 14px;
            color: white;
            line-height: 20px;
            font-family: 'Roboto', sans-serif;
        }
    }

    @media (max-width:1200px) {
        .ht-r {
            display: none;
        }
        .ht-l {
            width: 100%;
        }
        .home-btn-ob button {
            display: block;
        }
        .home-card-fon {
            height: 100%;
            width: 100%;
        }
        .home-form form {
            padding: 25px;
        }
        .home-form form input {
            border: none;
            border-bottom: 1px solid #212121;
            padding: 17px 13px;
            margin: 22px 0px;
            border-radius: 0;
            width: 100%;
            max-width: 100%;
        }
        body.stop {
            overflow: hidden;
        }
        .home-btn-ob-close button {
            display: block;
        }
    }
</style>
<?php
?>
<div id="home" class="hd bg bgdark">
    <span class="background"></span>
    <div id="main">
        <div class="home-txt-pad">
            <div class="row">
                <div class="ht-l">
                    <div class="home-cont">
                        <h2>Английский язык</h2>
                        <p class="sub">Идёт НАБОР в мини-группу (4-6 человек)! Занятия 3&nbspраза в недедю по  60 минут. Цена 15 000 тг/мес.</p>
                        <p>NextStep помогает выучить английский с удовольствием. Интересные занятия,
                           заинтересованные преподаватели и надёжный результат за минимальное время.</p>
                    </div>
                </div>
                <div class="ht-r">
                    <div class="home-card">
                        <div class="home-card-fon">
                            <div class="home-card-name">
                                <h3><?= $tr('Calling', 'Обратная связь') ?></h3>
                            </div>
                            <div class="home-form">
                                <div class="home-form-container">
                                    <form action="">
                                        <input type="text" name="name" id="name1" placeholder="<?= $tr('YourName', 'Ваше имя') ?>" />
                                        <input type="text" name="tel" id="tel1" placeholder="<?= $tr('YourPhone', 'Номер телефона') ?>" />
                                        <input type="hidden" name="spam" id="spam1" value="" />
                                        <input type="button" name="send" id="send1" value="<?= $tr('join2', 'Нажми меня нежно')?>" />
                                		<div id="resp1"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="home-btn-ob-close">
                                <button>
                                    <i class="icon ion-close fa-3x"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-btn-ob">
            <button><div class="i icon ion-ios-arrow-up"></div><?= $tr('Calling', 'Жмякни меня') ?></button>
        </div>
    </div>

</div>



<script src="/templates/NextStep/js/resize.js"></script>
<script type="text/javascript">
    window.onload = function () {
        document.body.className += ' loaded'
    };
</script>

<script>
    $('.home-btn-ob').click(function () {
        $('.ht-r').addClass('active');
        $('body').addClass('stop');
    });
    $('.home-btn-ob-close').click(function () {
        $('.ht-r').removeClass('active');
        $('body').removeClass('stop');
    });
</script>