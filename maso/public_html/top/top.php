<style>
    .top-nav {
        background: white;
        /* border-bottom: 5px solid #03C8DB; */
        box-shadow: 0 0 10px black;
        /* position: fixed; */
        left: 0;
        right: 0;
        z-index: 10000000;
    }

    .nav-it {
        display: flex;
        position: relative;
        align-items: center;
        height: 100%;
    }

    .nav-start {
        justify-content: flex-start;
    }

    .nav-end {
        justify-content: flex-end;
    }

    .navbar {
        text-align: right;
    }

    ul.navbar-list {
        list-style: none;
        display: flex;
    }

    ul.navbar-list li {
        padding: 20px 15px;
        font-size: 18px;
    }

    ul.navbar-list li:hover {
        background: #03C8DB;
    }

    ul.navbar-list li:hover a {
        color: white;
    }

    ul.navbar-list li a {
        color: #333;
        font-weight: 400;
        /* text-transform: uppercase; */
        font-size: 0.8em;
    }

    .nav-cont h2 {
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: 1px;
        color: white;
    }


    .fa-black-light {
        color: #333;
    }

    /* MOBILE */

    .top-btn button {
        padding: 5px;
        background: transparent;
        border: none;
    }

    .top-btn button::before {
        content: url(/img/menu-icon.png);
    }

    .top-btn button.active::before {
        content: url(/img/menu-close.png);
    }

    .top-btn button img::before {
        width: 100%;
    }

    .nav-it-line {
        width: 100%;
        height: 2px;
        background: #03C8DB;
    }

    .nav-brand {
        position: absolute;
        top: 0;
        z-index: 20;
        display: flex;
    }

    .nav-brand h2 {
        margin-left: 10px;
        margin-top: 5%;
        text-transform: uppercase;
        font-weight: 900;
        color: #03C8DB;
        font-size: 16px;
    }

    .nav-brand img {
        width: 150px;
        height: 120px;
        background: white;
        border-bottom: 5px solid #03C8DB;
        padding: 15px;
        border-radius: 50%;
        border-top-left-radius: 0;
        border-top-right-radius: 0;

    }

    @media(max-width:992px) {
        .navbar {
            height: 0;
            width: 100%;
            -webkit-transition: ease, 1s;
            -moz-transition: ease, 1s;
            transition: ease, 1s;
            overflow: hidden;
            z-index: 1000;
        }
        .navbar.active {
            height: 250px;
        }
        ul.navbar-list {
            display: inline;
            text-align: center;
        }
        header {
            position: fixed;
            z-index: 999;
            left: 0;
            right: 0;
            top: 0;
        }
    }

    @media (max-width:760px) {
        .nav-brand h2 {
            font-size: 16px;
        }
    }
</style>

<header id="top">
    <div class="top-nav">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-lg">
                    <div class="nav-it nav-start">
                        <div class="nav-brand">
                            <img src="/img/logo.png" alt="">
                            <h2 class="d-none d-lg-block">
                                Атырауский Мясокомбинат
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-auto d-lg-none">
                    <div class="top-btn ">
                        <!-- <button><i class="icon ion-navicon fa-3x"></i></button> -->
                        <button></button>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="nav-it nav-end">
                        <div class="navbar">
                            <div class="nav-it-line d-lg-none"></div>
                            <ul class="navbar-list">
                                <li href="#home">
                                    <a href="#">Главная</a>
                                </li>
                                <li>
                                    <a href="#">Услуги</a>
                                </li>
                                <li>
                                    <a href="#">Гостница</a>
                                </li>
                                <li>
                                    <a href="#">Контакты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>

<script>
    $('.top-btn button').click(function () {
        $('.navbar').toggleClass('active');
        $('.top-btn button').toggleClass('active');
    });
</script>