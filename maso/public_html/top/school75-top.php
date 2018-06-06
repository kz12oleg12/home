<style>
    .panel-1 {
        justify-content: flex-end;
        display: flex;
    }

    .panel-1 .sec {
        background: #eee;
        border-radius: 50px;
    }

    #search {
        border-radius: 50px;
        border: 1px solid transparent;
        padding: 5px;
        border-bottom-left-radius: 0;
        border-top-left-radius: 0;
        font-size: 17px;
    }

    .search {
        padding: 5px;
    }

    .lang .flag-icon {
        margin: 0 5px;
    }

    .lang,
    .data_sen,
    .search {
        margin-left: 15px;
    }

    .search .ion-ios-search-strong {
        padding: 5px 10px;
        background-color: white;
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
        border: 1px solid transparent;
    }

    .data_sen span {
        padding: 10px;
        font-size: 18px;
    }

    /*--------------------------- PANEL_2 */

    .panel-2 img {
        width: 70%;
    }

    .rd {
        display: flex;
        align-items: center;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 15px;
    }

    .top-cont {
        text-align: right;

    }

    .top-cont p {
        font-size: 16px;
        font-weight: 400;
        color: #5581c0;
    }

    .panel-2 hr {
        margin-top: 15px;
    }

    .nav-it {
        text-align: center;
        text-transform: uppercase;
        font-weight: 600;
        font-size: 14px;
        float: left;
        padding: 0 15px;
    }

    .nav-it a {
        color: rgb(188, 188, 189);
        transition: ease 0.5s;
    }

    .nav-it a:hover {
        color: #68b8eb;
    }

    .panel-3 .top-line {
        width: 60%;
        text-align: center;
        height: 1px;
        background: rgb(228, 228, 228);
    }

    .top-lin-rd {
        display: flex;
        justify-content: center;
        margin: 15px;
    }

    ul.list-nav {
        list-style: none;
    }

    .top-nav {
        display: flex;
        justify-content: center;
    }

    .navbrand .navbrand-name h2 {
        font-weight: 900;
        font-size: 40px;
    }

    .sh-line {
        background: linear-gradient(to right, rgba(225, 225, 225, 0) 0%, #e1e1e1 10%, #e1e1e1 90%, rgba(225, 225, 225, 0) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00e1e1e1', endColorstr='#00e1e1e1', GradientType=1);
        content: ' ';
        width: 100%;
        height: 2px;
        display: block;
        margin-top: 15px;
        margin-bottom: 15px;
    }
</style>

<header>
    <div class="container">
        <!-- <div class="panel-1 pad10">
            <div class="lang pad10 sec">
                <a href="#">
                    <span class="flag-icon flag-icon-ru fa-lg"></span>
                </a>
                <a href="#">
                    <span class="flag-icon flag-icon-kz fa-lg"></span>
                </a>
                <a href="#">
                    <span class="flag-icon flag-icon-us fa-lg"></span>
                </a>
            </div>
            <div class="data_sen pad10 sec">
                <span class="txt-up"> 1 апреля 2018 18:35</span>
            </div>
            <div class="search sec">
                <i class="icon ion-ios-search-strong fa-lg"></i>
                <input type="search" name="search" id="search" placeholder="Search">
            </div>
        </div> -->
        <div class="panel-2 pad10 bg-primary">
            <div class="row">
                <div class="col-6">
                    <div class="navbrand">
                        <!-- <img src="/img/1.png" alt=""> -->
                        <div class="navbrand-name">
                            <h2>Lorem Ipsum</h2>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="rd">
                        <div class="top-cont txt-up">
                            <p>Школа-гимназия №75</p>
                            <p>Город Астана, Есильский район, Орынбор, 28/1</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sh-line"></div>
        </div>
        <div class="panel-3 pad10">
            <div class="top-nav">
                <ul class="list-nav">
                    <li class="nav-it">
                        <a href="#">Главная</a>
                    </li>
                    <li class="nav-it">
                        <a href="#">Государственные символы</a>
                    </li>
                    <li class="nav-it">
                        <a href="#">Школьникам</a>
                    </li>
                    <li class="nav-it">
                        <a href="#">Родителям</a>
                    </li>
                    <li class="nav-it">
                        <a href="#">Учетелям</a>
                    </li>
                    <li class="nav-it">
                        <a href="#">ГИА</a>
                    </li>
                    <li class="nav-it">
                        <a href="#">СМИ</a>
                    </li>
                    <li class="nav-it">
                        <a href="#">Галерея</a>
                    </li>
                    <li class="nav-it">
                        <a href="#">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
</header>