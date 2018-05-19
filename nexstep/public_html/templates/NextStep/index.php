<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="/templates/default/images/favicon.ico">
	<title><?= 'NextStep' ?></title>

	<!-- STYLE -->
	<link href="/templates/NextStep/css/asti.css" rel="stylesheet">
	<link href="/templates/NextStep/css/dropdown.css" rel="stylesheet">
	<link href="/templates/NextStep/css/mobile.css" rel="stylesheet">
	<!-- <link rel="stylesheet" href="/templates/NextStep/css/moi_stily.css"> -->
	<link rel="stylesheet" href="/templates/NextStep/css/bootstrap-grid.min.css">

	<!-- ICON FONT -->
	<link href="/modules/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!--<link href="/modules/font-awesome/templates/NextStep/css/font-awesome.css" rel="stylesheet">-->
	<link href="/modules/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="/modules/pe-icon-7-stroke/css/helper.css" rel="stylesheet">
	<link href="/modules/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,900" rel="stylesheet"> 


	<!-- JS -->
	<script src="/modules/jquery/jquery.min.js"></script>
	<script src="/modules/jquery/jquery.waypoints.min.js"></script>
	<script>
		$(document).ready(function () {
			$("a[href*=#]").on("click", function (e) {
				var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top
				}, 777);
				e.preventDefault();
				return false;
			});
		});
	</script>
	<style>
		body{
			font-family: 'Open Sans',sans-serif;
		}
		h2{
			font-weight: 900;
		}
	</style>
</head>

<body>
	<?php 
	$options = [];
	in('engschool-top', ['options'=>$options]);
	if(empty($a)) 
		{
		$contnent = [];
		$home = ['engschool-home', 'engschool-about', ['engschool-1', $contnent], 'engschool-2', 'engschool-ob'];
		inn($home);	
		}
	else 
		{	
		in('bz4', $cont->get404());
		}
	in("engschool-footer", ['options'=>$options]); 
	?>
	<script src="/js/timer_count.js"></script>
	<?php //require_once('modules/feedback/feedback.php') ?>
</body>

</html>
<?php
	function inn($names, $lang='ru')
		{
		foreach ($names as $n)
			if(!empty($n)) 
				{
				$name = (is_array($n))? $n[0] : $n;
				$info = (isset($n[1]))? $n[1] : '';
				//$lang = (isset($n[2]))? $n[2] : $lang;
				in($name, $info, $lang);
				}
		}
		
	function in($a, $text=[], $lang='ru')
		{
		$allopts = new alloptions();
		$transletes = $allopts->get_translete('trnextstep');		
		$tr = tr($transletes);
		require_once('views/'.$lang.'/'.$a.'.php');
		}
		
	//либо так, либо в $tr хранится перевод на все языки и оттуда по языку возвращает нужное	
	function tr($tr)
		{
		$c = function($alias, $def) use($tr) 
			{ 
			return (isset($tr[$alias])? $tr[$alias] : $def);
			};
		return $c;
		}
?>