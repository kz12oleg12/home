<link rel="stylesheet" href="/css/style/footer.css">

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
                            <i class="icon fa-lg ion-ios-call"></i>
                            8707-221-7172
                        </li>
                        <li>
                            <i class="icon fa-lg ion-ios-email"></i>
                            schblon-ty@gmail.com
                        </li>
                        <li>
                            <i class="icon fa-lg ion-ios-location"></i>
                            г.Астана/ Бебетшилык 18/ кб.220
                        </li>
                    </ul>
                </div>
                <!-- <div class="fot-social">
                    <a href="#">
                        <i class="icon fa-3x ion-social-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="icon fa-3x ion-social-facebook"></i>
                    </a>
                    <a href="#">
                        <i class="icon fa-3x ion-social-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="icon fa-3x ion-social-pinterest"></i>
                    </a>
                    <a href="#">
                        <i class="icon fa-3x ion-social-whatsapp-outline"></i>
                    </a>
                </div> -->
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
                            <a href="#">Преимущества</a>
                        </li>
                        <li>
                            <a href="#">Услуги</a>
                        </li>
                        <li>
                            <a href="#">Схема работы</a>
                        </li>
                        <li>
                            <a href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d312.6948728482295!2d71.42008442682676!3d51.17191949142557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4245872a6e4892d3%3A0xcc11760ce27d78bb!2z0YPQu9C40YbQsCDQkdC10LnQsdC40YLRiNC40LvQuNC6IDE4LCDQkNGB0YLQsNC90LAgMDEwMDAw!5e0!3m2!1sru!2skz!4v1520234515631"
                    width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
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