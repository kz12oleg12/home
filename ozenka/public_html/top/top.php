<link rel="stylesheet" href="css/style/top.css">
<header>
    <nav>
        <div class="container">
            <div class="row">
                <div class="col col-lg-auto order-1">
                    <div class="nav-brand">
                        <h1>Astana Fatum</h1>
                    </div>
                </div>
                <div class="col-auto d-lg-none order-3">
                    <div class="nav-mb-mtn">
                        <button>
                            <i class="icon ion-ios-menu fa-2x"></i>
                        </button>
                    </div>
                </div>
                <div class="col-auto mr-l order-2">
                    <ul class="nav-list">
                        <li class="close">
                            <button><i class="icon ion-md-close fa-2x"></i></button>
                        </li>
                        <li>
                            <a href="#">Главная</a>
                        </li>
                        <li class="nav-line"></li>
                        <li>
                            <a href="#">Преимущества</a>
                        </li>
                        <li class="nav-line"></li>
                        <li>
                            <a href="#">Услуги</a>
                        </li>
                        <li class="nav-line"></li>
                        <li>
                            <a href="#">Схема работы</a>
                        </li>
                        <li class="nav-line"></li>
                        <li>
                            <a href="#">Контакты</a>
                        </li>
                        <li class="nav-line"></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="nv-fon"></div>
</header>

<script>
    $('nav .nav-mb-mtn button').click(function(){
        $('nav ul.nav-list').addClass('active');
        $('.nv-fon').addClass('active');
    });
    $('nav ul.nav-list li.close button').click(function(){
        $('nav ul.nav-list').removeClass('active');
        $('.nv-fon').removeClass('active');
    });
</script>