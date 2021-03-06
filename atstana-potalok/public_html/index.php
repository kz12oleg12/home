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
	<link rel="stylesheet" href="/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="/css/index.css">
	<link rel="stylesheet" href="/css/animate.css">

	<!-- ICON FONT -->
	<link href="/modules/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="https://unpkg.com/ionicons@4.1.1/dist/css/ionicons.min.css" rel="stylesheet">

	<!-- FONT -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,600,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yeseva+One&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
	<script src="/js/resize.js"></script>
	<script src="/js/index.js"></script>





</head>

<body class="scroll">
	<?php // in('ta'); ?>
	<!-- TOP -->
	<?php require_once("top/top.php"); ?>
	<!-- HOME -->
	<?php require_once("home/home.php"); ?>
	<!-- BLOKS -->
	<?php require_once("blocks/advantags.php"); ?>
	<?php require_once("blocks/about.php"); ?>
	<?php require_once("blocks/services.php"); ?>
	<!-- FEEDBACK -->
	<?php require_once("feedback/feedback.php"); ?>
	<!-- FOOTER -->
	<?php require_once("footer/footer.php"); ?>
	<!-- LINK -->
	<?php require_once("link/link.php"); ?>

	<div class="jolk"></div>



</body>

</html>
<?php
function in($a)
	{
	require_once('php/'.$a.'.php');
	}
?>