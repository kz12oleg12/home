<link href="http://allfont.ru/allfont.css?fonts=a_lcdnova" rel="stylesheet" type="text/css" />
<style>
    @font-face {
        font-family: Clock;
        /* Имя шрифта */
        src: url('/font/Clock.ttf');
        /* Путь к файлу со шрифтом */
    }

    header {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 10;
        padding: 5px 0;
        transition: 1s;
        background: #041c40;
    }

    .brand {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .hd {
        padding: 15px;
    }

    .language {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-transform: uppercase;
    }

    .language ul {
        display: flex;
        list-style: none;
    }

    .language ul li {
        padding: 15px;
        font-size: 1em;
        transition: 0.5s;
    }

    .language ul li:hover {
        transform: scale(1.1)
    }

    .language ul li a {
        color: white;
        /* padding: 3px 10px 9px 10px; */
        padding: 5px;
        border: 2px solid transparent;
        border-radius: 100%;
        transition: 1s;
    }

    .language ul li a.active {
        border: 2px solid white;
    }

    .language ul li a:hover {
        border: 2px solid red;
        transform: scale(1.5)
    }

    .telephone {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        color: white;
        font-size: 1.3em;
    }

    .telephone img {
        width: 35px;
        margin: 0 15px;
    }

    .d33:before {
        content: "";
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-bottom: 10px solid #ee1a30;
    }


    .cl-city {
        opacity: 0;
        justify-content: center;
        text-align: center;
        width: 100px;
        position: absolute;
        color: white;
        left: -20px;
        right: 0;
        transition: ease, 0.5s;
    }

    .cl-city h2 {
        font-family: 'Clock', arial;
        padding: 10px;
        background: #ee1a30;
        border-radius: 50px;
        margin-top: 9px;
        font-size: 0.8em;
        /* margin-left: 15px;
        margin-right: 15px; */
    }

    .cl-it {
        cursor: pointer;
    }


    .cl-it.active img {
        opacity: 1;
    }

    .cl-it img {
        opacity: 0.3;
    }

    .cl-it:hover img {
        transform: scale(1.2)
    }

    .cl-it.active img {
        transform: scale(1.2)
    }

    .cl-it:hover .cl-city,
    .cl-it:hover img {
        opacity: 1;
    }

    .clock {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .btn-phone:hover span {
        text-decoration: underline;
        text-decoration-color: #ee1a30;
    }
</style>

<header>
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="brand">
                    <img src="/img/logo.svg" alt="" width="100%">
                    
                </div>
            </div>

            <div class="col-auto ">

                <div class="language">
                    <ul>
                        <li>
                            <a href="#">
                                en

                            </a>
                            <div class="lg-line"></div>
                        </li>
                        <li>
                            <a href="#" class="active">
                                ru

                            </a>
                            <div class="lg-line"></div>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-auto">
                <a href="#" class="btn-phone">
                    <div class="telephone">
                        <img src="/img/icon/phone.svg" alt="">
                        <span>+ 7 (701) 946 3634</span>

                    </div>
                </a>
            </div>
            <div class="col">
                <div class="clock">
                    <div class="row no-gutters">
                        <div class="col">
                            <div class="cl-it">
                                <img src="/img/clock.png" alt="" width="100%">
                                <div class="cl-city d33">
                                    <h2>City</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="cl-it">
                                <img src="/img/clock.png" alt="" width="100%">
                                <div class="cl-city d33">
                                    <h2>City</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="cl-it active">
                                <img src="/img/clock.png" alt="" width="100%">
                                <div class="cl-city d33">
                                    <h2>АСТАНА</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="cl-it">
                                <img src="/img/clock.png" alt="" width="100%">
                                <div class="cl-city d33">
                                    <h2>City</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="cl-it">
                                <img src="/img/clock.png" alt="" width="100%">
                                <div class="cl-city d33">
                                    <h2>City</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>