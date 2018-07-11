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
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/modules/owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="/modules/owlcarousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="/css/animate.css">
	<link rel="stylesheet" href="/modules/custom-scrollbar/jquery.mCustomScrollbar.css" />

	<!-- ICON FONT -->
	<link href="/modules/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="https://unpkg.com/ionicons@4.1.1/dist/css/ionicons.min.css" rel="stylesheet">
	<link href="/modules/pe-icon-7-stroke/css/helper.css" rel="stylesheet">
	<link href="/modules/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
	<link rel="stylesheet" href="/modules/flag-icon-css-master/css/flag-icon.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700,900" rel="stylesheet">


	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	
	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/modules/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="/modules/owlcarousel/owl.carousel.min.js"></script>
	<script src="/js/index.js"></script>

	<style>
		body {
			font-family: 'Open Sans', sans-serif;
			margin: 0;
			background: #f3f3f3;
		}

		body.stop {
			overflow: hidden;
		}

		@media (max-width:992px) {
			body {
				overflow: inherit;
			}
		}
	</style>
</head>

<body>
	<?php // in('ta'); ?>
	<!-- TOP -->
	<?php require_once("top/header.php"); ?>
	<?php require_once("top/nav.php"); ?>
	<?php require_once("top/navgl.php"); ?>

	<!-- HOME -->
	<?php require_once("home/home.php"); ?>

	<!-- BLOCKS -->
	<?php require_once("blocks/about.php"); ?>


	

	<script>
		
	</script>
</body>

</html>
<?php
function in($a)
	{
	require_once('php/'.$a.'.php');
	}
?>