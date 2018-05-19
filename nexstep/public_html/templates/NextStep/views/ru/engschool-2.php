<style>
        #services {}
    
        .eng2_name h2 {
            font-size: 38px;
            color: #212121;
            font-weight: 900;
            margin: 15px 0;
            text-align: center;
        }
    
        .eng2_it_img,
        .eng2_it_cont {
            padding: 5%;
        }
    
        .eng2_it_cont p {
            text-align: justify;
            letter-spacing: 1px;
            line-height: 2;
        }
    
        .eng2_it_cont h2 {
            font-size: 30px;
            color: #212121;
            font-weight: 900;
            margin: 15px 0;
        }
    
        .eng2_it-line {
            width: 100%;
            height: 2px;
            background: orange;
            margin: 5px 0;
        }
    
        @media screen and (max-width:1200px) {
            .eng2_it_cont h2 {
                font-size: 20px;
            }
        }
    </style>
    <?php
    $servicess = [];
    $options = [];
    if(isset($text) && is_array($text))
        {
        extract($text); 
        }
    ?>
    <section id="services">
        <div class="container-fluid">
            <div class="eng2_name">
                <h2>
                    <?= $tr('Servicess', 'Услуги') ?>
                </h2>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 order-first order-lg-2">
                    <div class="eng2_it_img">
                        <img src="/images/engschool-1/1.jpg" alt="" width="100%">
                    </div>
                </div>
                <div class="col-12 col-lg-6 order-lg-1">
                    <div class="eng2_it_cont">
                        <h2>ПОДГОТОВКА К ЭКЗАМЕНАМ</h2>
                        <div class="eng2_it-line"></div>
                        <p>Проводим курсы английского в Астане для подготовки к различным экзаменам: IELTS, TOEFL, GMAT
                            и другим. Поможем развить все необходимые навыки: чтение (reading), грамматика (writing),
                            аудирование (listening) и речь(speaking) для экзамена.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 ">
                    <div class="eng2_it_img">
                        <img src="/images/engschool-1/2.jpg" alt="" width="100%">
                    </div>
                </div>
                <div class="col-12 col-lg-6  ">
                    <div class="eng2_it_cont">
                        <h2>ГРУППОВОЕ ОБУЧЕНИЕ</h2>
                        <div class="eng2_it-line"></div>
                        <p>Мы обучаем в группах от 5 человек. Небольшие группы позволяют сделать курсы английского максимально эффективными и живыми. В них можно сравнить свой уровень с другими учениками, практиковать речь, повышается ответственность к занятиям.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 order-first order-lg-2">
                    <div class="eng2_it_img">
                        <img src="/images/engschool-1/3.jpg" alt="" width="100%">
                    </div>
                </div>    
                <div class="col-12 col-lg-6  order-lg-1">
                    <div class="eng2_it_cont">
                        <h2>ИНДИВИДУАЛЬНОЕ ОБУЧЕНИЕ</h2>
                        <div class="eng2_it-line"></div>
                        <p>Если вам удобно посещать курсы английского в Астане на индивидуальной основе вы можете рассчитывать на NexStep. Такой подход удобен тем, что вам уделяется больше внимания и времени. Но всё ещё необходима практика общения с другими людьми.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>