<style>
    #schablon1-footer {
        background: #eee;
        color: gray;
        border-top: 10px solid #03C8DB;

    }

    #schablon1-footer a {
        color: gray;
        transition: ease, 0.5s;
    }

    #schablon1-footer a:hover {
        color: #333;
    }

    #schablon1-footer iframe {
        padding: 0 15px;
    }

    /* .fot{
        padding: 15px;
    } */

    .fot-name h2 {
        font-weight: 900;
        text-transform: uppercase;
        padding: 5px 0;
        border-bottom: 1px solid gray;
        margin: 5px;

    }

    .fot-cont ul.list-cont {
        list-style: none;
    }

    .fot-cont ul.list-cont li {
        padding: 5px;
    }

    .fot-cont ul.list-cont li .icon {
        padding-right: 10px;
    }

    .fot-social i {
        padding-right: 15px;
    }

    .btn-map button {
        width: 100%;
        border: 1px solid white;
        color: white;
        background: #5a5a5a;
        cursor: pointer;
        transition: ease, 0.5s;
        padding: 15px;
        font-weight: 600;
        text-transform: uppercase;
        margin: 5px;
    }

    .btn-map button:hover {
        background: white;
        color: #5a5a5a;
    }

    
    @media (max-width: 576px) {
        #schablon1-footer iframe {
            padding: 0;
            margin: 0;
            height: 0;
            transition: 1s;
        }
        #schablon1-footer iframe.active {
            height: 200px;
            transition: 1s;
        }


    }
</style>

<footer id="schablon1-footer">
    <div class="container fot">
        <div class="row">
            <div class="col-12 col-md-auto">
                <div class="fot-name">
                    <h2>Контакты</h2>
                </div>
                <div class="fot-cont">
                    <ul class="list-cont">
                        <li>
                            <i class="icon fa-lg ion-iphone"></i>
                            8707-221-7172
                        </li>
                        <li>
                            <i class="icon fa-lg ion-email"></i>
                            schblon-ty@gmail.com
                        </li>
                        <li>
                            <i class="icon fa-lg ion-ios-location"></i>
                            г.Астана/ Бебетшилык 18/ кб.220
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-12 col-md-auto order-first ">
                <div class="fot-name">
                    <h2>Меню</h2>
                </div>
                <div class="fot-cont">
                    <ul class="list-cont">
                        <li>
                            <a href="#">Главная</a>
                        </li>
                        <li>
                            <a href="#">Услуги</a>
                        </li>
                        <li>
                            <a href="#">Гостиница</a>
                        </li>
                        <li>
                            <a href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11519.273981184322!2d51.868087746650964!3d47.169192792882434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDEwJzAxLjMiTiA1McKwNTMnMDcuNSJF!5e1!3m2!1sru!2skz!4v1525504588553" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div class="btn-map d-block d-sm-none">
                    <button> Показать карту</button>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    $('.btn-map button').click(function () {
        $('iframe').toggleClass('active');
    });

</script>