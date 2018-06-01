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
	<link href="https://unpkg.com/ionicons@4.1.1/dist/css/ionicons.min.css" rel="stylesheet">
	<link href="/modules/pe-icon-7-stroke/css/helper.css" rel="stylesheet">
	<link href="/modules/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
	<link rel="stylesheet" href="/modules/flag-icon-css-master/css/flag-icon.min.css">

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700,900" rel="stylesheet">

	<!-- JS -->
	

	<style>
		body {
			font-family: 'Open Sans', sans-serif;
		}
	</style>
</head>

<body>
	<?php // in('ta'); ?>
	<!-- TOP -->
	<?php require_once("top/header.php"); ?>
	<!-- HOME -->
	<?php require_once("home/home.php"); ?>
	<?php require_once("blocks/sm.php"); ?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script src="/modules/owlcarousel/owl.carousel.min.js"></script>
	<script src="/js/resize.js"></script>
	<script src="/js/index.js"></script>
	<script>
		$('.owl-carousel').owlCarousel({
			animateOut: 'slideOutUp',
			animateIn: 'slideInUp',
			loop: true,
			margin: 0,
			nav: false,
			dots: false,
			items: 1
		})
	</script>
	<script>
		var owl = $('.owl-carousel');
		owl.owlCarousel();
		// Go to the next item
		$('.next-sl').click(function () {
			owl.trigger('next.owl.carousel');
		})
	</script>


</body>

</html>
<?php
function in($a)
	{
	require_once('php/'.$a.'.php');
	}
?>