<style>
    .background {
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        top: 0;
        background: gray url("/img/home.jpg") no-repeat center center;
        background-size: cover;
        z-index: -1;
    }

    .bgdark:after {
        background: rgba(53, 45, 47, 0.25) none repeat scroll 0 0;
        z-index: -1;
    }

    #main {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        /* margin-bottom: 110px; */
    }

    #main .mn-cont {
        padding: 20px;
    }

    #main .mn-cont h1,
    #main .name-home-form h2 {
        font-weight: 900;
        color: white;
        margin: 15px;
        text-transform: uppercase;
        font-size: 2.5em;
        text-align: right;
        font-family: 'Oswald', sans-serif;
    }

    #main .name-home-form h2 {
        text-align: center;
        font-size: 2em;
    }

    #main .mn-cont p {
        padding: 15px;
        color: white;
        font-size: 16px;
        text-align: right;
        line-height: 1.5;
        letter-spacing: 0.6px;
        font-weight: 400;
        font-family: 'Roboto', sans-serif
    }

    #main form.home-form {
        width: 100%;
        padding: 15px;
        display: flex;
        justify-content: center;
    }

    #main form.home-form input {
        width: 100%;
    }

    #main form.home-form input[type="text"] {
        padding: 7px;
        border: navajowhite;
        border-right: 1px solid lightgray;
    }

    #main form.home-form input[type="button"] {
        padding: 5px 15px;
        background: #4a98dc;
        border: navajowhite;
        color: white;
        font-family: 'Oswald', sans-serif;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        cursor: pointer;
    }
    #main form.home-form input[type="button"]:hover{
        transform: scale(1.2);
    }
    @media (max-width: 992px){
        #main .mn-cont h1,#main .mn-cont p{
            text-align: center;
        }
        #main .mn-cont h1{
            font-size: 2em;
        }
        #main .mn-cont p{
            font-size: 1em;
        }
        #main form.home-form input[type="text"] {
        padding: 7px;
        border: navajowhite;
        border-right: none;
        border-bottom: 1px solid lightgray;
    }
    }
</style>

<section id="home" class="bg bgdark">
    <span class="background"></span>
    <div id="main">
        <div class="container">
            <div class="mn-cont">
                <h1>Независимая оценка</h1>
                <p>ASTANA FATUM - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной
                    "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую
                    коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.</p>
            </div>
            <div class="name-home-form">
                <h2>
                    Быстрая консультация
                </h2>
            </div>
            <form action="" class="home-form">
                <div class="row no-gutters justify-content-center">
                    <div class="col-12 col-md-6 col-lg">
                        <input type="text" placeholder="Ваше имя">
                    </div>
                    <div class="col-12 col-md-6 col-lg">
                        <input type="text" placeholder=" Телефон">
                    </div>
                    <div class="col-12 col-md-12 col-lg">
                        <input type="button" value="Отправить">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="/js/resize.js"></script>
<script type="text/javascript">
    window.onload = function () {
        document.body.className += ' loaded'
    };
</script>