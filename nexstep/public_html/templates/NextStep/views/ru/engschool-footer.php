<style>
    #footer-map {
        background: #212121;
        padding: 15px;
    }
    #footer-map .container {
    	padding: 0;
    }
    .footer-name h2 {
        text-transform: uppercase;
        color: white;
        font-weight: 900;
        font-size: 30px;
        padding: 15px 5px;
    }

    ul.contact-list {
        list-style: none;
        /*padding: 0 15px;*/
    }

    ul.contact-list li {
        padding: 5px;
        font-size: 18px;
        color: white;
    }

    ul.contact-list li .icon {
        padding-right: 10px;
        color: orange;
    }
    ul.contact-list li .icon:hover {
        padding-right: 10px;
        color: white;
    }
    ul.contact-list li .icon.ft-soc-icon {
        padding: 15px 55px 0 0;
    }

    .footer-panel {
        text-align: center;
        color: white;
        background: #3c3b3b;
        padding: 15px;
    }
    .footer-panel h3{
        text-transform: uppercase;
    }
    .footer-panel a{
        color: #b8b8b8;
        text-transform: uppercase;
        transition: 0.5s;
    }
    .footer-panel a:hover{
        color: orange;
        transition: 0.5s;
    }
    #footer-map .asti{
    	margin: 0;
    	float: none;
    	text-align: center;
    }
    @media screen and (min-width: 992px) {
    	#footer-map .asti{
    		text-align: right;
		}    	
    }
</style>
<?php
$options = [];
if(isset($text) && is_array($text))
	{
	extract($text); 
	}
$opts = tr($options);
?>
<footer id="footer-map">
    <div class="container">
       <ul class="contact-list row">
        	<div class="col-12 col-lg-6">
                <div class="footer-name">
                    <h2><?= $opts('name', 'NextSteps') ?></h2>
                </div>
                <li>
                	<a href="tel:<?= $opts('phone_link', '87072133154') ?>" title="<?= $opts('phone_link', '87072133154') ?>">
                        <i class="icon ion-android-phone-portrait fa-lg"></i>
                        <?= $opts('phone', '8707-221-7172') ?>
                	</a>
                </li>
                <li>
                	<a href="mailto:<?= $opts('email', 'info@astana-it.kz') ?>">
                        <i class="icon ion-email fa-lg"></i>
                        <?= $opts('email', 'info@astana-it.kz') ?>
               		</a>
                </li>
                <li>
                    <i class="icon fa fa-map-marker fa-lg"></i>
                    <?= $opts('address', 'г. Астана, Бейбитшилик 18, оф. 219') ?>
                </li>
            </div>
            <div class="col-12 col-lg-6">
                <li>
	                <div id="map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1051.78927320515!2d71.41962012158442!3d51.17133713628088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDEwJzE5LjQiTiA3McKwMjUnMTMuOCJF!5e0!3m2!1sru!2skz!4v1526631186352"
								style="border:0"
								allowfullscreen=""
								width="100%"
								height="200"
								frameborder="0"></iframe>					
					</div>
                </li>
            </div>
            <!--<li>
                <a href="<?= $opts('twitter', '#') ?>" target="_blank" title="Twitter">
                    <i class="icon ion-social-twitter fa-3x ft-soc-icon"></i>
                </a>
                <a href="<?= $opts('facebook', '#') ?>" target="_blank" title="Facebook">
                    <i class="icon ion-social-facebook fa-3x ft-soc-icon"></i>
                </a>
                <a href="<?= $opts('instagram', '#') ?>" target="_blank" title="Instagram">
                    <i class="icon ion-social-instagram fa-3x ft-soc-icon"></i>
                </a>
            </li>-->
        </ul>
    </div>
    <div class=" col-12 col-lg-4  "></div>
    <div class="col-12 col-lg-4  "></div>
    <div class="footer-panel">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 offset-lg-4">
                    <h3><?= $opts('name', 'NextSteps') ?></h3>
                </div>
                <div class="col-12 col-lg-4 asti">
                    <a href="https://astana-it.kz/site" target="_blank">Разработанно в Astana-IT</a>
                </div>
            </div>
        </div>
    </div>
</footer>