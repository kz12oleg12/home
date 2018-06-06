<style>
    #home {
        border-bottom: 15px solid #333;
        height: 400px;
        position: relative;
    }

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
        background: rgba(53, 45, 47, 0.184) none repeat scroll 0 0;
    }

    #main {
        z-index: 1;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    .main-name{
        color: white;
        text-align: center;
        
    } 
    .main-name h2 {
        font-weight: 900;
        font-size: 30px;
        margin: 15px 0;
    }

    .main-name h3 {
        font-weight: 600;
        margin: 15px 0;
        font-size: 20px;
    }

    #home input::-webkit-input-placeholder {
        color: rgb(207, 207, 207);
    }

    #home input::-moz-placeholder {
        color: rgb(207, 207, 207);
    }

    /* Firefox 19+ */

    #home input:-moz-placeholder {
        color: rgb(207, 207, 207);
    }

    /* Firefox 18- */

    #home input:-ms-input-placeholder {
        color: rgb(207, 207, 207);
    }

    #home input[type="text"] {
        border: none;
        background: transparent;
        border-bottom: 1px solid white;
        font-size: 18px;
        padding: 15px 0;
        color: white;
    }

    #home input[type="button"] {
        content: "sdasd";
        border: 1px solid white;
        background: transparent;
        text-transform: uppercase;
        color: white;
        cursor: pointer;
        transition: ease, 0.5s;
        padding: 15px;
        font-size: 18px;
        margin: 15px;
    }

    #home input[type="button"]:hover {
        background: white;
        color: #333;
    }
    #home input{
        width: 220px;
    }
    #home .row{
        height: 100%;
    }
    #home form{
        text-align: center;
    }
</style>

<section id="home" class="bg bgdark">
    <span class="background"></span>
    <div id="main" class="container">
    <div class="row justify-content-center align-items-center">

        <div class="col">
            <div class="main-name">
                <h2>Lorem Ipsum</h2>
                <h3>Lorem Ipsum-Lorem Ipsum</h3>
            </div>

            <form action="">
                <input type="text" placeholder="ВАШЕ ИМЯ">
                <input type="text" placeholder="ТЕЛЕФОН">
                <input type="button" value="Отправить">
            </form>
        </div>
    </div>
    </div>


</section>