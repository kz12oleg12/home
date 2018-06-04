<style>
    nav {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 10;
        background: white;
        /* background: transparent url('/img/nav.png') no-repeat center top; */
        /* background-size: cover; */
    }

    .navbar .navbar-list {
        display: flex;
        justify-content: center;
        list-style: none;
    }

    .navbar .navbar-list li {
        font-size: 0.74em;
        padding: 25px 0;
        margin: auto 5px;
        text-transform: uppercase;
        font-weight: 600;
    }

    .navbar .navbar-list li a {
        border-bottom: 2px solid transparent;
        transition: ease, 0.5s;
        padding: 15px 0;
        padding-bottom: 15px;
        color: #082247;
    }

    .navbar .navbar-list li a:hover {
        border-bottom: 1.5px solid red;
        color: red;
    }


    .navbar .navbar-list .nav-btn {
        background: transparent url('/img/nav-btn.png') no-repeat center top;
        background-size: cover;
        background-size: cover;
        width: 156px;
        height: 100%;
        text-align: center;
    }

    .navbar .navbar-list a li.nav-btn i {
        font-size: 1.3em;
        border-radius: 50%;
        border: 1px solid rgba(255, 148, 148, 0.364);
        transition: ease, 0.5s;
        padding: 2px 8px 2px 8px;
        color: white;
    }

    .navbar .navbar-list a li.nav-btn:hover i {
        border: 1px solid white;
    }

    /* .navbar .navbar-list li.nav-btn a {
    font-size: 16px;
} */

    .navbar .navbar-list li.nav-btn {
        padding: 0;
        padding-top: 10px;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    /* .next-sl{
        cursor: pointer;
    } */

    @media (max-width:992px) {
        .navbar .navbar-list {
            display: block;
            justify-content: center;
            list-style: none;
            position: fixed;
            top: 0;
            background: white;
            width: 300px;
            bottom: 0;
            height: 100%;
            right: 0;
            /* transform: translateX(500vw); */
            transition: easy, 1s;
        }
        .navbar .navbar-list li a {
            border-bottom: 2px solid transparent;
            transition: ease, 0.5s;
            padding: 5px 15px;
            padding-bottom: 15px;
            color: #082247;

        }
        .navbar .navbar-list li a:hover {
            border-bottom: 1.5px solid transparent;
        }
        /* .navbar .navbar-list li:active {
            background: red;
            color: white;
            
        } */
        .navbar .navbar-list li:active a {
            color: white;
        }
        .navbar .navbar-list li {
            border-bottom: 1px solid lightgray;
            margin: 0;
            /* -webkit-transition-duration: 0.4s; */
            /* Safari */
            transition-duration: 0.8s;
            transition: ease, 1s;
            position: relative;
            overflow: hidden;
        }
        .navbar .navbar-list li::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            border-radius: 50%;
            width: 10px;
            height: 10px;
            opacity: 0;
            margin: auto;
            /* transition: all 1s; */
        }
        .navbar .navbar-list li:active::after {
            background: rgb(194, 194, 194);
            border-radius: 0;
            transform: scale(100);
            opacity: 1;
            /* transition: 0s; */

        }
        .navbar .navbar-list li a i {
            color: red;
            margin: 0 5px;

        }

    }
</style>

<nav>
    <div class="container">
        <div class="navbar">
            <ul class="navbar-list">
                <a href="#bl_2" class="d-none d-lg-block">
                    <li class="nav-btn next-sl">
                        <i class="icon ion-md-arrow-down"></i>
                    </li>
                </a>

                <li>
                    <a href="#">
                        <i class="icon ion-ios-remove fa-lg d-lg-none"></i>
                        Vip Чартер</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ion-ios-remove fa-lg d-lg-none"></i>
                        Групповой Чартер</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ion-ios-remove fa-lg d-lg-none"></i>
                        Медицинский Чартер</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ion-ios-remove fa-lg d-lg-none"></i>
                        Парк самлетов</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ion-ios-remove fa-lg d-lg-none"></i>
                        Парк вертолетов</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ion-ios-remove fa-lg d-lg-none"></i>
                        Менеджмент ВС</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon ion-ios-remove fa-lg d-lg-none"></i>
                        Комплексные решения</a>
                </li>
            </ul>
        </div>
    </div>
</nav>