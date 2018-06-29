<link rel="stylesheet" href="/css/styles/range.css">

<section id="range" class="pd">

    <div class="container">
        <div class="range-name">
            <h2>Каталог нашей продукции</h2>
            <h3>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.</h3>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="item item-1">
                    <div class="rg-img">
                        <img src="/img/range/1.png" alt="" width="50%">
                    </div>
                    <div class="content">
                        <div class="cont-name">
                            <h3>Внутренние</h3>
                        </div>
                        <ul>
                            <li>Доступные шаги: P1-P10</li>
                            <li>Тип чипа: SMD</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="item item-1">
                    <div class="rg-img">
                        <img src="/img/range/1.png" alt="" width="50%">
                    </div>
                    <div class="content">
                        <div class="cont-name">
                            <h3>Внутренние</h3>
                        </div>
                        <ul>
                            <li>Доступные шаги: P1-P10</li>
                            <li>Тип чипа: SMD</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="item item-1">
                    <div class="rg-img">
                        <img src="/img/range/1.png" alt="" width="50%">
                    </div>
                    <div class="content">
                        <div class="cont-name">
                            <h3>Внутренние</h3>
                        </div>
                        <ul>
                            <li>Доступные шаги: P1-P10</li>
                            <li>Тип чипа: SMD</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="item item-1">
                    <div class="rg-img">
                        <img src="/img/range/1.png" alt="" width="50%">
                    </div>
                    <div class="content">
                        <div class="cont-name">
                            <h3>Внутренние</h3>
                        </div>
                        <ul>
                            <li>Доступные шаги: P1-P10</li>
                            <li>Тип чипа: SMD</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="item item-1">
                    <div class="rg-img">
                        <img src="/img/range/1.png" alt="" width="50%">
                    </div>
                    <div class="content">
                        <div class="cont-name">
                            <h3>Внутренние</h3>
                        </div>
                        <ul>
                            <li>Доступные шаги: P1-P10</li>
                            <li>Тип чипа: SMD</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-3">
                <div class="item item-1">
                    <div class="rg-img">
                        <img src="/img/range/1.png" alt="" width="50%">
                    </div>
                    <div class="content">
                        <div class="cont-name">
                            <h3>Внутренние</h3>
                        </div>
                        <ul>
                            <li>Доступные шаги: P1-P10</li>
                            <li>Тип чипа: SMD</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="range-btn">
            <button>Больше</button>
        </div>

    </div>

    <div class="pupup">
        <div class="pupup_baground"></div>
        <div class="card">

            <div class="row no-gutters">
                <div class="col-4">
                    <div class="card-img">
                        <img src="/img/range/1.png" alt="" width="auto">
                    </div>
                </div>
                <div class="col">
                    <div class="content">
                        <div class="cont-name">
                            <h3>Внутренние</h3>
                            <button class="pupup-close">
                                <i class="material-icons">close</i>
                            </button>
                        </div>
                        <p>Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
                            "рыбой" для текстов на латинице с начала XVI века.</p>
                        <ul>
                            <li>
                                <span>Доступные шаги:</span> P1-P10</li>
                            <li>
                                <span>Тип чипа:</span> SMD</li>
                            <li>
                                <span>Доступные шаги:</span> P1-P10</li>
                            <li>
                                <span>Тип чипа:</span> SMD</li>
                            <li>
                                <span>Доступные шаги:</span> P1-P10</li>
                            <li>
                                <span>Тип чипа:</span> SMD</li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <div class="pup-feedback">
                        <form action="">
                            <div class="row">

                                <div class="col-6">
                                    <input type="text" placeholder="Lorem Ipsum">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Lorem Ipsum">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Lorem Ipsum">
                                </div>
                                <div class="col-6">
                                    <input type="text" placeholder="Lorem Ipsum">
                                </div>

                                <input type="button" value="расчитать">
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var pup = $('.pupup'),
        pup_cd = $('.pupup .card'),
        pup_close = $('.pupup .card .pupup-close'),
        pup_bg = $('.pupup_baground'),
        rg_btn_1 = $('.item-1');

    rg_btn_1.click(function () {
        pup.addClass('active');
        pup_cd.addClass('animated zoomIn');
        $('body').addClass('stop');
    });

    pup_close.click(function () {
        pup.removeClass('active');
        pup_cd.removeClass('animated zoomIn');
        $('body').removeClass('stop');
    });

    pup_bg.click(function () {
        pup.removeClass('active');
        pup_cd.removeClass('animated zoomIn');
        $('body').removeClass('stop');
    });
</script>