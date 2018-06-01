<style>
    nav {
        position: absolute;
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
</style>

<nav>
    <div class="container">
        <div class="navbar">
            <ul class="navbar-list">
                <a  href="#">
                    <li class="nav-btn next-sl" >
                        <i class="icon ion-md-arrow-down"></i>
                    </li>
                </a>

                <li>
                    <a href="#">Vip Чартер</a>
                </li>
                <li>
                    <a href="#">Групповой Чартер</a>
                </li>
                <li>
                    <a href="#">Медицинский Чартер</a>
                </li>
                <li>
                    <a href="#">Парк самлетов</a>
                </li>
                <li>
                    <a href="#">Парк вертолетов</a>
                </li>
                <li>
                    <a href="#">Менеджмент ВС</a>
                </li>
                <li>
                    <a href="#">Комплексные решения</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
