<link rel="stylesheet" href="/css/styles/feedback.css">
<section id="feedback">
    <div class="container">
        <!-- <div class="name">
            <h3>Услуги</h3>
            <h2>Нет ничего не возможного</h2>
            <div class="ab-line"></div>
        </div> -->
        <div class="row">
            <div class="col-12 col-lg order-2 order-lg-1">
                <div class="feed">
                    <div class="name">
                        <h3>Услуги</h3>
                        <h2>Нет ничего не возможного</h2>
                        <div class="ab-line"></div>
                    </div>
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="Ваше имя">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="Телефон">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="Пункт отправки">
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="Пункт назначения">
                            </div>
                            <div class="col-12">
                                <textarea name="" id="" cols="30" rows="10" placeholder="Описание груза"></textarea>
                            </div>
                            <div class="col-12 col-md-6 ml-auto">
                                <input type="button" value="Отправить">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-lg order-1 order-lg-2">
                <div class="name">
                    <h3>Часто задаваемые вопросы</h3>
                    <h2>Дополнительная информация</h2>
                    <div class="ab-line"></div>
                </div>
                <div class="acc">
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Section 2</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Section 3</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Section 3</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Section 3</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Section 3</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>