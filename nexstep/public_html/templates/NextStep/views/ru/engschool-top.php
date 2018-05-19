<style>
    .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    header {
        position: absolute;
        width: 100%;
        z-index: 100;
        /* background-color: white */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.315);
    }

    .header_1 {
        position: relative;
        background-color: white;
    }

    .header_1.nav-fix {
        position: fixed;
        transition: 1s;
        top: -100px;
        transform: translateY(100px);
        background-color: white;
        margin-top: 0;
    }

    .header_1 .nav-list a {
        color: black;
    }

    .header_1.nav-rev {
        position: relative;
        transition: 0.5s;
    }

    .navbar {
        display: inline-flex;
        width: 100%;
        font-size: 20px;
        padding: 5px 0;
    }

    .nav-list {
        margin: 15px 0;
    }

    .navbar .nav-list .nav-item {
        display: inline;
        padding: 15px;
        cursor: pointer;
    }

    .itt-1.active {
        color: orange;
        transition: 0.5s;
    }

    .itt-2.active {
        color: orange;
        transition: 0.5s;
    }

    .itt-3.active {
        color: orange;
        transition: 0.5s;
    }

    .itt-4.active {
        color: orange;
        transition: 0.5s;
    }

    .itt-5.active {
        color: orange;
        transition: 0.5s;
    }

    .itt-6.active {
        color: orange;
        transition: 0.5s;
    }

    .btn-navbar {
        border-radius: 1%;
        background-color: transparent;
        border: none;
        font-size: 25px;
        padding: 2px 10px;
        cursor: pointer;
        transition: 1s;
        margin: 10px;
    }

    .nav-btn {
        text-align: right;
    }

    .nav-list-mob {
        position: absolute;
        width: 100%;
        text-align: left;
        font-size: 18px;
        background-color: lightcyan;
        z-index: 90;
        padding: 20px;
        top: -500px;
        transition: 1s;
    }

    .nav-list-mob li {
        padding: 10px;
        list-style: none;
    }

    .nav-list-mob.active {
        transform: translateY(700px);
        transition: 1s;
    }

    .navblock-sec {
        width: 100%;
    }

    .phone-nav {
        font-size: 18px;
        overflow: hidden;
        height: 0;
        transition: 1s;
    }

    .phone-nav.active {
        height: 380px;
    }

    .nav-list-phone {
        list-style: none;
        margin: 10px 0;
    }

    .nav-list-phone li {
        padding: 10px;
        text-align: center
    }

    .header_st .nav-list-phone li {
        background-color: #16212d;
    }

    .nav-list-phone li:hover {
        background-color: lightslategrey;
        transition: 0.5s
    }

    .nav-list-phone .itt-1.active {
        color: orange;
        transition: 0.5s;
    }

    .nav-list-phone .itt-2.active {
        color: orange;
        transition: 0.5s;
    }

    .nav-list-phone .itt-3.active {
        color: orange;
        transition: 0.5s;
    }

    .nav-list-phone .itt-4.active {
        color: orange;
        transition: 0.5s;
    }

    .nav-list-phone .itt-5.active {
        color: orange;
        transition: 0.5s;
    }

    .nav-list-phone .itt-6.active {
        color: orange;
        transition: 0.5s;
    }

    .btn-search {
        color: transparent;
        transition: 0.5s;
        cursor: pointer;
    }

    .btn-search .fa-search {
        color: black;
        transition: 0.6s;
    }

    .btn-search:hover {
        border-radius: 50px;
        color: black;
        transition: 0.5s;
    }

    .btn-search:hover .fa-search {
        color: white;
        transition: 0.6s;
    }

    .btn-search.active {
        border-radius: 50px;
        color: black;
        transition: 0.5s;
    }

    .btn-search-mob {
        border-radius: 50px;
        color: black;
        transition: 0.5s;
    }

    .fa-search-mob {
        color: white;
        transition: 0.6s;
    }

    .top-search-mob {
        width: 80%;
        border: 1px solid gray;
        font-size: 16px;
        padding: 10px;
        transition: 0.5s;
        border-radius: 50px;
        float: right;
        margin: 5px;
    }

    .fa-search.active {
        color: white;
        transition: 0.6s;
    }

    .top-search {
        font-size: 16px;
        padding: 5px 0;
        transition: 0.5s;
        border-radius: 50px;
        border: 2px solid black;
        width: 0;
    }

    .top-search.active {
        width: 75%;
        border: 1px solid black;
        transition: 0.5s;
        padding: 5px;
    }

    .brand-name h2 {
        text-transform: uppercase;
        font-weight: 600;
        margin: 10px 0;
    }

    .navblock-sec-logo {
        text-align: left;
    }

    .navblock-sec-menu {
        text-align: right;
    }

    .navblock-sec-search {
        text-align: right;
    }

    .top-social-list,
    .top-cont-list {
        list-style: none;
        display: flex;
        text-align: center;
        width: 100%
    }

    .top-social {
        float: right;
    }

    ul.top-cont-list {
        padding: 5px;
    }

    ul.top-cont-list li {
        padding: 0px 25px;
        font-size: 14px;
        padding-left: 0;
    }

    ul.top-cont-list li .fa {
        padding: 0 15px;
        padding-left: 0;
        color: orange;
    }

    .top-social-list li {
        padding: 5px 15px;
    }

    .top-social-list li a {
        color: #b8b8b8;
        transition: 0.5s;
    }

    .top-social-list select {
        border: 0;
        border-radius: 0;
        box-shadow: 0 0 0;
        padding: 0 15px;
        height: auto;
        color: #b8b8b8;
        background-color: transparent;
        cursor: pointer;
        transition: 0.5s;
    }

    .top-social-list select:hover {
        color: orange;
        transition: 0.5s;
    }

    .top-social-list li a:hover {
        color: orange;
        transition: 0.5s;
    }

    .top-social-list select option {
        color: black;
    }

    .top-panel {
        background-color: #212121;
        color: #b8b8b8;
        padding: 5px 0;
    }

    ul.top-cont-list li.top-pl-line {
        width: 1px;
        background-color: #b8b8b8;
        padding: 0;
        margin: 0 25px;
        margin-left: 0;
    }

    .top-social-list .top-pl-line {
        width: 1px;
        background-color: #b8b8b8;
        padding: 0;
        margin: 5px 25px;
        margin-left: 0;
    }

    .top-cont-list.mob {
        display: inline;
        text-align: left;
        color: black;
    }

    .top-cont-list.mob li {
        padding: 5px;
    }

    .top-social-list.mob {
        padding: 10px 0;
    }

    .top-social-list.mob select {
        color: black;
    }

    .top-social-list.mob li a {
        color: black;
    }

    .top-panel.mob {
        background-color: transparent;
    }

    @media (max-width: 1200px) {
        .navbar {
            font-size: 20px;
        }
        .nav-list {
            display: none
        }
        .brand-name {
            font-size: 14px;
            text-align: left;
            padding: 5px;
        }
        .navblock-sec-search {
            text-align: left;
            margin: 15px 0;
        }
    }

    @media (min-width: 1200px) {
        .nav-btn {
            display: none;
        }
    }
</style>
<?php
$options = [];
if(isset($text) && is_array($text))
	{
	extract($text); 
	}
$opts = tr($options);
?>

<header class="header_1">
    <div class="top-panel d-none d-lg-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="top-cont">
                        <ul class="top-cont-list">
                            <a href="tel:<?= $opts('phone_link', '87072133154') ?>">
                                <li>
                                    <i class="fa fa-mobile fa-lg"></i>
                                    <?= $opts('phone', '8707-213-3154') ?>
                                </li>
                            </a>
                            <li class="top-pl-line"></li>
                            <a href="mailto:<?= $opts('email', 'info@astana-it.kz') ?>">
                                <li>
                                    <i class="fa fa-envelope fa-lg"></i>
                                    <?= $opts('email', 'english-school@gmail.com') ?>
                                </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="top-social">
                        <ul class="top-social-list">
                            <!--<li>
	                            <form action="">	                                
                                    <select class="form-control" name="lang" id="exampleFormControlSelect1">
                                        <option value="ru">Русский</option>
                                        <option value="en">English</option>
                                    </select>
	                            </form>
                            </li>
                            <li class="top-pl-line"></li>
                            <li>
                                <a href="<?= $opts('facebook', '#') ?>" target="_blank" title="Facebook">
                                	<i class="fa fa-facebook fa-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $opts('twitter', '#') ?>" target="_blank" title="Twitter">
                                	<i class="fa fa-twitter fa-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $opts('google', '#') ?>" target="_blank" title="Google">
                                	<i class="fa fa-google fa-lg"></i>
                                </a>
                            </li>-->
                            <li>
                                <a href="#footer-map" target="_blank" title="Google">
                                    <i class="fa fa-map-marker fa-lg"></i>
                                    г. Астана, Бейбитшилик 18, оф. 219
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="row">
                <section class="col-8 col-lg-3">
                    <div class="navblock-sec-logo">
                        <div class="brand">
                            <div class="brand-name">
                                <h2>
                                    <?= $opts('name', 'NextStep') ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="col col-lg">
                    <div class="navblock-sec-menu">
                        <ul class="nav-list">
                            <li class="nav-item it-1">
                                <a class="itt-1" href="/">
                                    <?= $opts('home', 'item 1') ?>
                                </a>
                            </li>
                            <li class="nav-item it-2">
                                <a class="itt-2" href="#services">
                                    <?= $opts('servicess', 'item 2') ?>
                                </a>
                            </li>
                            <li class="nav-item it-3">
                                <a class="itt-3" href="#about">
                                    <?= $opts('about', 'item 3') ?>
                                </a>
                            </li>
                            <!--<li class="nav-item it-4"><a class="itt-4" href="#ITEM_4">item 4</a></li>-->
                            <!--<li class="nav-item it-5"><a class="itt-5" href="#ITEM_5">item 5</a></li>-->
                            <li class="nav-item it-6">
                                <a class="itt-6" href="#contacts">
                                    <?= $opts('contacts', 'item 6') ?>
                                </a>
                            </li>
                        </ul>
                        <div class="nav-btn">
                            <button class="btn-navbar lop">
                                <i class=" btn-s fa fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </section>


            </div>
            <div class="col-12">
                <div class="phone-nav">

                    <hr>
                    <ul class="nav-list-phone">
                        <div class="row">
                            <div class="col-6">
                                <li class="nav-item it-1">
                                    <a class="itt-1" href="/">
                                        <?= $opts('home', 'item 1') ?>
                                    </a>
                                </li>
                                <li class="nav-item it-2">
                                    <a class="itt-2" href="#services">
                                        <?= $opts('servicess', 'item 2') ?>
                                    </a>
                                </li>
                                <!--<li class="nav-item it-1"><a class="itt-1" href="#ITEM_1">item 1</a></li>
                                <li class="nav-item it-2"><a class="itt-2" href="#ITEM_2">item 2</a></li>
                                <li class="nav-item it-3"><a class="itt-3" href="#ITEM_3">item 3</a></li>-->
                            </div>
                            <div class="col-6">
                                <li class="nav-item it-3">
                                    <a class="itt-3" href="#about">
                                        <?= $opts('about', 'item 3') ?>
                                    </a>
                                </li>
                                <!--<li class="nav-item it-4"><a class="itt-4" href="#ITEM_4">item 4</a></li>-->
                                <!--<li class="nav-item it-5"><a class="itt-5" href="#ITEM_5">item 5</a></li>-->
                                <li class="nav-item it-6">
                                    <a class="itt-6" href="#contacts">
                                        <?= $opts('contacts', 'item 6') ?>
                                    </a>
                                </li>
                            </div>
                        </div>
                    </ul>
                    <div class="top-panel mob ">
                        <hr>
                        <ul class="top-cont-list mob">
                            <a href="tel:<?= $opts('phone_link', '87072133154') ?>">
                                <li>
                                    <i class="fa fa-mobile fa-lg"></i>
                                    <?= $opts('phone', '8707-213-3154') ?>
                                </li>
                            </a>
                            <!-- <li class="top-pl-line"></li> -->
                            <a href="mailto:<?= $opts('email', 'info@astana-it.kz') ?>">
                                <li>
                                    <i class="fa fa-envelope fa-lg"></i>
                                    <?= $opts('email', 'info@astana-it.kz') ?>
                                </li>
                            </a>
                        </ul>
                        <hr>
                        <ul class="top-social-list mob">
                            <!--<li>
                                <form action="">
                                    <select class="form-control" name="lang" id="exampleFormControlSelect1">
                                        <option value="ru">Русский</option>
                                        <option value="en">English</option>
                                    </select>
                                </form>
                            </li>-->
                            <li class="top-pl-line"></li>
                            <li>
                                <a href="<?= $opts('facebook', '#') ?>" target="_blank" title="Facebook">
                                    <i class="fa fa-facebook fa-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $opts('twitter', '#') ?>" target="_blank" title="Twitter">
                                    <i class="fa fa-twitter fa-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $opts('google', '#') ?>" target="_blank" title="Google">
                                    <i class="fa fa-google fa-lg"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


<div class="stick_1"></div>
<script>
    $('.btn-search').click(function () {
        $('.btn-search').toggleClass('active');
        $('.top-search').toggleClass('active');
        $('.fa-search').toggleClass('active');
    });
</script>
<script>
    $('.it-1').hover(function () {
        $('.itt-1').toggleClass('active');
    });

    $('.it-2').hover(function () {
        $('.itt-2').toggleClass('active');
    });

    $('.it-3').hover(function () {
        $('.itt-3').toggleClass('active');
    });

    $('.it-4').hover(function () {
        $('.itt-4').toggleClass('active');
    });
    $('.it-5').hover(function () {
        $('.itt-5').toggleClass('active');
    });
    $('.it-6').hover(function () {
        $('.itt-6').toggleClass('active');
    });
</script>

<script>
    var waypoints = $('.stick_1').waypoint(function (direction) {

        $('.header_1').addClass('nav-fix');
    }, {
            offset: '-20%'
        });

    var waypoints = $('.stick_1').waypoint(function (direction) {
        $('.header_1').removeClass('nav-fix');
    }, {
            offset: '-0.5%'
        });
</script>

<script>
    var waypoints = $('.stick_1').waypoint(function (direction) {

        $('.header_2').addClass('nav-fix');
        // $('.header_1').removeClass('nav-rev') ; 
    }, {
            offset: '-20%'
        });

    var waypoints = $('.stick_1').waypoint(function (direction) {

        // $('.header_1').addClass('nav-rev');
        $('.header_2').removeClass('nav-fix');
    }, {
            offset: '-0.5%'
        });
</script>
<script>
    $('.btn-navbar').click(function () {
        if ($(this).hasClass('active')) {
            $('.btn-s').removeClass('fa-times');
            $('.btn-s').addClass('fa-bars');
            $('.btn-navbar').removeClass('active');
            $('.phone-nav').removeClass('active')
        } else {
            $('.btn-s').removeClass('fa-bars');
            $('.btn-navbar').addClass('active');
            $('.btn-s').addClass('fa-times');
            $('.phone-nav').addClass('active')
        }
    });
</script>