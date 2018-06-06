<style>
    #feedback {
        height: 350px;
        position: relative;
    }

    #feedback .background {
        background: transparent url('/img/fadeback.jpg') no-repeat center center;
        background-size: cover;
        background-attachment: fixed;
        z-index: -1;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        border-top: 5px solid #03C8DB;
    }

    #feedback.bgdark:after {
        background: rgba(0, 0, 0, 0.14) none repeat scroll 0 0;
    }

    .feedback-cont {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1;
        padding: 15px;
    }

    .feedback-cont form {
        text-align: center;
    }

    input::-webkit-input-placeholder {
        color: white;
    }

    input::-moz-placeholder {
        color: white;
    }

    /* Firefox 19+ */

    input:-moz-placeholder {
        color: white;
    }

    /* Firefox 18- */

    input:-ms-input-placeholder {
        color: white;
    }
    
    


    textarea::-webkit-textarea-placeholder {
        color: white;
    }

    textarea::-moz-placeholder {
        color: white;
    }

    /* Firefox 19+ */

    textarea:-moz-placeholder {
        color: white;
    }

    /* Firefox 18- */

    textarea:-ms-textarea-placeholder {
        color: white;
    }
    .feedback-cont form input[type="text"] {
        padding: 10px;
        width: 100%;
        background: #ffffff42;
        border: none;
        border: 1px solid white;
        color: black;
        font-size: 18px;
        margin: 15px ;
    }

    .feedback-cont form input {
        margin: 15px;
    }

    .feedback-cont form input[type="buttom"] {
        padding: 10px;
        border: 1px solid white;
        background: #ffffff42;
        font-size: 18px;
        text-align: center;
        color: white;
        text-transform: uppercase;
        cursor: pointer;
        transition: ease, 0.5s;
        margin-left: 15px;
    }

    .feedback-cont form input[type="buttom"]:hover {
        background: white;
        color: #333;
    }

    .feedback-name h2 {
        font-size: 30px;
        text-align: center;
        color: white;
        font-weight: 900;
        padding: 15px;
        margin: 15px;
        text-transform: uppercase
    }

    textarea {
        height: 100px;
        width: 100%;
        margin: 15px;
        background: #ffffff42;
        border: 1px solid white;
        padding: 10px;
        font-size: 18px;
        font-family: 'Open Sans', sans-serif;
    }
    @media (max-width: 760px){
        #feedback {
        height: 500px;
        position: relative;
    }
    }
</style>

<section id="feedback" class="bg bgdark bl-pad">
    <div class="background"></div>

    <div class="feedback-cont">
        <div class="container">
            <div class="feedback-name">
                <h2>Оставить заявку</h2>
            </div>
                    <form action="">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="ВАШЕ ИМЯ">
                            </div>

                            <div class="col-12 col-md-6">
                                <input type="text" placeholder="ТЕЛЕФОН">
                            </div>

                            <div class="col-12 col-md-6">
                                <textarea name="" id="" placeholder="ДОП.ИНФОРМАЦИЯ"></textarea>
                            </div>

                            <div class="col-12 col-md-6">
                                <input type="buttom" value="Отправить">
                            </div>


                    </form>
                </div>
            </div>
        </div>
        <!-- cols="15" rows="10" -->
</section>