<style>
    #contacts {
        position: relative;
        height: 100%;
        padding: 15px;
        min-height: 450px;
    }

    .eng-ob-name {
        padding: 15px;
    }

    .eng-ob-name h2 {
        text-align: center;
        color: white;
        font-size: 30px;
        text-transform: uppercase;
        font-weight: 900;
        padding: 15px;
    }

    .ob-fon {
        background: transparent url('/images/engschool-ob.jpg') no-repeat center center;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: -1;
    }

    .eng-ob {
        position: relative;
        z-index: 1;
    }

    .eng-ob-form {
        display: flex;
        justify-content: center;
        padding: 15px;
        margin: 15px 0;
        text-align: center;
    }

    .eng-ob-form form {
        padding: 15px;
        width: 100%;
    }

    .eng-ob-form form input.in-1 {
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
    }

    .eng-ob-form form input.in-3 {
        border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;
    }

    .eng-ob-form input {
        padding: 10px 15px;
        margin: 15px 0;
        font-size: 18px;
        border: 1px solid transparent;
        width: 100%;
        max-width: 300px;
        min-width: 250px;
    }

    .eng-ob-form form .ob-btn {
        border: 1px solid orange;
        background: orange;
        text-transform: uppercase;
        color: white;
        transition: 0, 5s;
    }

    .eng-ob-form form .ob-btn:hover {
        border: 1px solid orange;
        background: white;
        text-transform: uppercase;
        color: orange;
        cursor: pointer;
        transition: 0.5s;
    }

    @media (max-width:1200px) {
        
        
    }
    @media (max-width:992px) {
        .eng-ob-form form input.in-1 {
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .eng-ob-form form input.in-2 {
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        .eng-ob-form form input.in-3 {
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
        }
        
    }
    @media (max-width:700px){
        .eng-ob-form input {
            margin: 15px 0;

        }
        .eng-ob-form form input.in-1 {
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }

        .eng-ob-form form input.in-2 {
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
        }
    }
</style>

<section id="contacts" class="bg bgdark">
    <div class="ob-fon "></div>
    <div class="eng-ob">
        <div class="eng-ob-name">
            <h2>
                <?= $tr('ContactUs', 'Свяжитесь с нами') ?>
            </h2>
        </div>
        <div class="eng-ob-form">
            <form action="">
                <input class="in-1" type="text" name="name" id="name2" placeholder="<?= strtoupper($tr('YourName', 'Ваше имя')) ?>">
                <input class="in-2" type="text" name="tel" id="tel2" placeholder="<?= strtoupper($tr('YourPhone', 'Номер телефона')) ?>">
                <input type="hidden" name="spam" id="spam2" value="" />
                <input class=" ob-btn in-3" type="button" name="send" id="send2" value="<?= $tr('send', 'Отправить') ?>">
        		<div id="resp2"></div>
            </form>
        </div>
    </div>
</section>