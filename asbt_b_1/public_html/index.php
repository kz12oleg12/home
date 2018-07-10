<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Reset CSS -->
	<link rel="stylesheet" href="/libs/reset.css">

	<!-- Bootstrap Grid CSS -->
	<link rel="stylesheet" href="/libs/bootstrap-grid/bootstrap-grid.css">

	<!-- Fontello ICONS CSS-->
	<link rel="stylesheet" href="/libs/fontello/css/fontello.css">

	<!-- mmenu CSS -->
	<link rel="stylesheet" href="/libs/mmenu/jquery.mmenu.all.css">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="/libs/owl-carousel/css/owl.carousel.min.css">
	<link rel="stylesheet" href="/libs/owl-carousel/css/owl.theme.default.min.css">

	<!-- Main CSS-->
	<link rel="stylesheet" href="/css/main.css">

	<!-- ************************************ -->

	<!-- jQuery -->
	<script src="libs/jquery/jquery.js"></script>
	<!-- mmeny JS -->
	<script src="libs/mmenu/jquery.mmenu.all.js"></script>
	<!-- Owl Carousel JS -->
	<script src="libs/owl-carousel/js/owl.carousel.min.js"></script>
	<!-- Main JS -->
	<script src="js/common.js"></script>

</head>

<body>

	<!-- <?php // in('ta'); ?> -->

	<div id="my-page">

		<!-- HEADER -->
		<div id="my-header">
			
			<!-- TOP -->
			<?php require_once("top/top.php"); ?>
			<!-- HOME -->
			<?php require_once("home/home.php"); ?>
			
		</div>

		<!-- CONTENT -->
		<div id="my-content">

			<!-- BLOCKS -->	
			<?php require_once("blocks/services.php"); ?>
			<?php require_once("blocks/help.php"); ?>
			<?php require_once("blocks/tools.php"); ?>
			<?php require_once("blocks/partners.php"); ?>
			<?php require_once("blocks/list.php"); ?>

		</div>

		<!-- FOOTER -->
		<div id="my-footer">

			<!-- BLOCKS -->	
			<?php require_once("blocks/footer-menu.php"); ?>
			<?php require_once("blocks/footer.php"); ?>

		</div>

	</div>

		<!-- Media CSS -->
	<link rel="stylesheet" href="/css/media.css">

</body>

</html>
<?php
function in($a)
{
	require_once('php/'.$a.'.php');
}
?>