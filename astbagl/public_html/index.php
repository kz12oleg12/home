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
	<link rel="stylesheet" href="/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/css/style.css">
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

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700,900" rel="stylesheet">

	<!-- INDEX CSS -->
	<link rel="stylesheet" href="/css/index css/header.css">
	<link rel="stylesheet" href="/css/index css/nav.css">
	<!-- JS -->

	<style>
	</style>
</head>

<body>
	<?php // in('ta'); ?>
	<!-- TOP -->
	<?php require_once("top/header.php"); ?>

	<?php require_once("top/nav.php"); ?>

	<div class="bl-it">
		<?php require_once("bl/bl_1.php"); ?>
	</div>
	<div class="bl-it">
		<?php require_once("bl/bl_2.php"); ?>
	</div>
	<div class="bl-it">
		<?php require_once("bl/bl_3.php"); ?>
	</div>
	<div class="bl-it">
		<?php require_once("bl/bl_4.php"); ?>
	</div>
	<div class="bl-it">
		<?php require_once("bl/bl_5.php"); ?>
	</div>
	<div class="bl-it">
		<?php require_once("bl/bl_6.php"); ?>
	</div>
	<div class="bl-it">
		<?php require_once("bl/bl_7.php"); ?>
	</div>
	<div class="bl-it">
		<div id="bl_8" class="bl" style="background: #E9EBEF;">
			<!-- <?php require_once("bl/bl_8.php"); ?> -->
			<div class="footer-w" style="width: 100%; margin-bottom:0;">
				<?php require_once("VIP/blocks/list.php"); ?>
				<?php require_once("VIP/blocks/footer-menu.php"); ?>
				<?php require_once("VIP/blocks/footer.php"); ?>
			</div>
		</div>
	</div>



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script src="/modules/owlcarousel/owl.carousel.min.js"></script>
	<script src="/js/resize.js"></script>
	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/modules/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="/js/index.js"></script>

	<script>
		(function ($) {
			$(window).on("load", function () {
				$(".part").mCustomScrollbar();
			});
		})(jQuery);
		// $(".part").mCustomScrollbar({
		// 	theme: "dark"
		// });
	</script>

	<script>
		$('.nav-menu').click(function () {
			$('.navbar-list').addClass('active');
			$('.jolk').addClass('active');
			$('body').addClass('stop');
		});
		$('.nv-cl').click(function () {
			$('.navbar-list').removeClass('active');
			$('.jolk').removeClass('active');
			$('body').removeClass('stop');
		});
		$('.jolk').click(function () {
			$('.navbar-list').removeClass('active');
			$('.jolk').removeClass('active');
			$('body').removeClass('stop');
		});
		$('.navbar .navbar-list li a').click(function () {
			$('.navbar-list').removeClass('active');
			$('.jolk').removeClass('active');
			$('body').removeClass('stop');
		}); 
	</script>
	<script>
		$(document).ready(function () {
			$("a").click(function () {
				var elementClick = $(this).attr("href");
				var destination = $(elementClick).offset().top;
				if ($.browser) {
					$('body').animate({ scrollTop: destination }, 1100); //1100 - скорость
				} else {
					$('html').animate({ scrollTop: destination }, 1100);
				}
				return false;
			});
		});
	</script>
</body>

</html>
<?php
function in($a)
	{
	require_once('php/'.$a.'.php');
	}
?>