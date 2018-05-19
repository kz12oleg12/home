<style>
    #about {
        padding: 5% 0;
    }
    
    #about video {
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.322);
    }
    
    .about-video {
        padding: 5%;
    }
    .about-video img{
    	max-width: 100%;
    	margin: 15px auto;
    }
    
    .about-text {
        padding: 10%
    }
    
    #about h2 {
        /*font-size: 50px;*/
        font-size: 38px;
        color: #212121;
        font-weight: 900;
        margin: 15px 0;
    }
    
    #about p {
        font-size: 18px;
        color: #212121;
        line-height: 25px;
        margin: 15px 0;
    }
    
    button.btn-about {
        padding: 10px 25px;
        margin: 15px 0;
        background-color: orange;
        border: navajowhite;
        text-transform: uppercase;
        font-weight: 700;
        color: white;
        font-family: 'Roboto', sans-serif;
        letter-spacing: 3px;
        cursor: pointer;
        border: 1px solid transparent;
        transition: 0.5s;
        font-size: 16px;
    }
    
    button.btn-about:hover {
        border: 1px solid orange;
        background-color: white;
        color: orange;
        transition: 0.5s;
    }
    
    @media (max-width:600px) {
    	.about-text {
    		text-align: center;
    	}
        #about h2 {
            /*font-size: 30px;*/
            font-size: 28px;
			text-align: center;
        }
        #about p {
            font-size: 14px;
            line-height: 20px;
            font-family: 'Roboto', sans-serif;
            text-align: justify
        }
    }
</style>

<section id="about">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="about-video">
                    <img id="vid-1" src="/images/english1.jpg">
                    <!--<video id="vid-1" onclick="playPause()" width="100%">
                        <source src="/templates/NextStep/file/school.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                        <source src="movie.webm" type='video/webm; codecs="vp8, vorbis"' />
                    </video>-->
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="about-text">
                    <h2>Языковые курсы английского в Астане</h2>
                    <p>Запишитесь на курсы английского в Астане "NextStep" чтобы выучить язык с удовольствием.
                       Вас ждут интересные занятия, общение и хорошо продуманные уроки. 
                       Современные методики изучения английского языка помогут надёжно закрепить материал в памяти.</p>
                    <a href="#contacts"><button class="btn-about"><?= $tr('join3', 'Присоединиться') ?></button></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    var myVideo = document.getElementById("vid-1");

    function playPause() {
        if (myVideo.paused)
            myVideo.play();
        else
            myVideo.pause();
    }
</script>