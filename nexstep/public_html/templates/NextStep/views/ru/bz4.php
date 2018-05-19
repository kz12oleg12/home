<style>
    .full-block {
    	max-width: 1200px;
    	min-width: 300px;
    	min-height: 300px;
    }
    .full-block-cont p {
        line-height: 1.5em;
        text-align: justify;
    }
    
    .full-block-cont img {
    	max-width: 100%;
    }

    .full-block-cont {
        margin: 0 15px
    }
    
	.full-block h1 {
	    text-align: center;
	    padding: 10px 0;
	    font-size: 30px;
	    font-weight: bold;
	}
</style>
<?php
$title = $alltext = '';
if(isset($text) && !empty($text))
		{
		if(isset($text['article_title']) && !empty($text['article_title'])) 
			$title = $text['article_title'];
		if((isset($text['article_text']) && !empty($text['article_text'])) || !empty($text['article_title']))
			$alltext = $text['article_text'];
		}
?>
<div class="full-block">
    <h1><?= $title ?></h1>
    <div class="full-block-cont">
       <?= $alltext ?>
    </div>
</div>
            