<!-- <style>
    #services {
        position: relative;
    }

    #services .kl {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        right: 0;
    }

    #services .bgdark:after {
        background: rgba(0, 0, 0, 0.555) none repeat scroll 0 0;
    }

    .eng-card-it {
        background-color: white;
        position: relative;
        height: 100%;
        box-shadow: 0 0 10px #0000005c;
        margin: 15px 0;
        max-height: 500px;
        min-height: 450px;
    }

    .eng-card-it img {
        width: 100%;
        max-height: 300px;
    }

    .eng-1-fon {
        background: transparent url('/images/eng-1-fon.jpg') no-repeat center center;
        background-size: 100%;
        padding-bottom: 50px;
    }

    .eng-card-name h2 {
        text-transform: uppercase;
        text-align: center;
        padding: 15px;
        color: orange;
    }

    .eng-card-txt p {
        padding: 0 15px;
        text-align: justify;
        color: #a5a5a5;
    }

    .eng-card-btn {
        text-align: right;
        background-color: orange;
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .eng-card-btn button, .eng-card-btn .button {
        border: 1px solid transparent;
        padding: 5px 15px;
        background-color: orange;
        color: white;
        text-transform: uppercase;
    }

    .eng-card-btn button:hover {
        background-color: white;
        border: 1px solid orange;
        color: orange;
        cursor: pointer;
        transition: 0.5s;
    }

    .eng-name h2 {
        text-align: center;
        padding: 15px;
        color: white;
        font-size: 35px;
        position: relative;
        font-weight: 900;
        margin: 15px;
        text-transform: uppercase;
    }

    #services hr {
        border: 1px solid orange;
        margin: 15px;
        margin-top: 0;
    }

    @media (max-width:1200px) {
        .eng-card-it {
            height: 500px;
        }
        .eng-1-fon {
            background: #eee ;
        }
        .eng-name {
            background: orange;
        }
        .kl.bg.bgdark{
            display: none;
        }
    }

    @media (max-width:768px) {
        .eng-card-it {
            height: 480px;
        }
    }
</style>
<?php
$servicess = [1, 2, 3, 4];
$options = [];
if(isset($text) && is_array($text))
	{
	extract($text); 
	}
?>
<section id="services">
    <div class="kl bg bgdark"></div>
    <div class="eng-1-fon ">
        <div class="eng-name">
            <h2><?= $tr('Servicess', 'Заголовок') ?></h2>
        </div>
        <div class="container-fluid">
            <div class="row" >
           	<?php
           	$i = 1;
           	foreach($servicess as $srv)
            	{
            	$article_title = 'Заголовок';
            	$article_text = 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
                                стандартной "рыбой" для текстов на латинице с начала XVI века.';
            	$article_key = '';
            	$article_descr = '';
            	//$article_alias = '';
            	$article_image = '/images/engschool-1/'.$i.'.jpg'; $i++;            	
				if(isset($srv) && is_array($srv))
					{
					extract($srv); 
					}
				if(empty($article_descr) && !empty($article_text))
					{
            		$article_descr = mb_substr(strip_tags($article_text), 0, 240, 'UTF-8');
            		} 
            	?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="eng-card-it">
                        <img src="<?= $article_image ?>" alt="<?= $article_title ?>" title="<?= $article_title ?>">
                        <div class="eng-card-name">
                            <h2><?= $article_title ?></h2>
                        </div>
                        <hr>
                        <div class="eng-card-txt">
                            <p><?= $article_descr ?></p>
                        </div>
                        <div class="eng-card-btn">
                            <?php 
                            if(!empty($article_key)) 
                           		{	
                            ?>
                        	<p class="button"><?= $article_key ?>
                            	<i class="icon">kzt</i>
                        	</p> 
                        	<?php } ?>                           
                        </div>
                    </div>
                </div>
                <?php
            	}
                ?>                
            </div>
        </div>
    </div>
</section> -->