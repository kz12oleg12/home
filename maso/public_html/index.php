<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Hello Default">
	<meta name="keywords" content="hello, default">
	<link rel="shortcut icon" href="/default/logo.ico">
	<title>Hello Default</title>

	<!-- STYLE -->
	<link href="/css/asti.css" rel="stylesheet">
	<link href="/css/dropdown.css" rel="stylesheet">
	<link href="/css/mobile.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/modules/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="/modules/owlcarousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/animate.css">

	<!-- ICON FONT -->
	<link href="/modules/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="/modules/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="/modules/pe-icon-7-stroke/css/helper.css" rel="stylesheet">
	<link href="/modules/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
	<link rel="stylesheet" href="/modules/flag-icon-css-master/css/flag-icon.min.css">

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Roboto:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Exo+2:200,200i,300,300i,400,400i,600,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:200,200i,300,300i,400,400i,600,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Didact+Gothic" rel="stylesheet">
	<!-- JS -->
	<script src="/js/jquery.min.js"></script>
	<script src="/modules/owlcarousel/owl.carousel.min.js"></script>
	<script src="/js/resize.js"></script>

	<style>
		body {
			font-family: 'Open Sans', sans-serif;
		}
		.ms-fon{
			background: transparent url('/img/us/ms-fon.png') no-repeat center center;
			background-size: cover;
		}
	</style>
</head>

<body>
	<?php // in('ta'); ?>
	<!-- TOP -->
	<?php require_once("top/top.php"); ?>
	<!-- HOME -->
	<?php require_once("home/home.php"); ?>
	<!-- BLOCK -->
	<div class="ms-fon">
	<?php require("blocks/advantage.php"); ?>
	<?php require("blocks/uslugi.php"); ?>
	</div>
	<?php require("blocks/prallax.php"); ?>
	<?php require("blocks/gost.php"); ?>
	<!-- FEEDBACK -->
	<?php require("feedback/feedback-1.php"); ?>
	<!-- FOOTER -->
	<?php require("form/footer.php"); ?>
	<!-- LINK -->
	<?php require_once("link-astanaIT/link.php"); ?>

	<!-- <div id="footer" class="w">
		<p>Company 2017</p>
		<a class="asti" target="_blank" href="https://astana-it.kz">Разработано в Astana-IT</a>
	</div> -->
	<script src="/js/timer_count.js"></script>
</body>

</html>
<?php
function in($a)
	{
	require_once('php/'.$a.'.php');
	}
?>