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

	<!-- INDEX CSS -->
	<link rel="stylesheet" href="/css/index css/header.css">
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
	<header class="">
		<div class="container">
			<div class="row no-gutters">
				<div class="col d-none d-md-block d-lg-block order-first">

					<div class="brand">
						<!-- <img src="/img/logo.svg" alt="" width="100%"> -->
						<!-- <img src="/img/logoW.png" alt="" width="90%"> -->
						<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="10.478cm" height="0.847cm">
							<image x="0px" y="0px" width="100%"  xlink:href="data:img/png;base64,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"
							/>
						</svg> -->
					</div>
				</div>

				<div class="col-auto col-lg-auto">
					<div class="language">
						<ul>
							<li>
								<a href="#">
									en
								</a>
								<div class="lg-line"></div>
							</li>
							<li>
								<a href="#" class="active">
									ru
								</a>
								<div class="lg-line"></div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col col-md col-lg-auto">
					<a href="#" class="btn-phone">
						<div class="telephone">
							<!-- <img src="/img/icon/phone.svg" alt=""> -->
							<!-- <img src="/img/icon/phoneW.svg" alt=""> -->
							<!-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="0.847cm" height="0.847cm">
								<image x="0px" y="0px" width="27px" height="27px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAMAAADXqc3KAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABZVBMVEX////aIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUHaIUH////7lFdpAAAAdnRSTlMAADh4rtj1PZjHh1EnCmrCZxB5lQcT0eLl3qkeCA4hmSIWPLfFzXMS7xvaCS7D+nubyLBG85JK5LnO0yyD2wRC+XElgQXsGvEfJIS+u5wXxGgNfCrWD7Z+3zoBP9nrMzKPBq+RDMGnz4LMFESa3K3L6JDmKWtecHneSAAAAAFiS0dEAIgFHUgAAAAHdElNRQfiBgQOJwU3Sxk+AAABUUlEQVQoz3WS11oCMRCFM9vYki2wgAUVRETsgAU7oiiighW7Yq/Y9f3NJvjJhXsucjF/MjlzEoSogOMFUZJEgefAEarLIyuqhnUda6oie/6AYVpeqMtrmcYv8NkYGoRtHwOG7UeNAPy2QfubGDEQsINNzS2tIcCmhwDZQhS0tXeEtUhntCsGYMkIcYqXglB3nLQnG3oSxIHCIV6lc/T2Cf0Dg0PDoCeDhKo8EjQH6Kk0jIyOjWcmJqemCdAEJGIHzMzOZedzAAuLRp5aFpGkk3pkKbpciDOzK0Wy6BIDq2uwXqLlMoSTDNBWG5tbiW2nvrNb2dtnrejlB4eQLWhwdHxSKp6escup3UwV4DwNF5dX1ze3wOzSAe8sgNQ9aV1VHh6BDUgjyWWeas+B8svrWy3gHHAioSHm3z9in1D5+o6w4GmIrrG7P5T707p/hv++zw/+TycPR2M6bwAAAABJRU5ErkJggg=="
								/>
							</svg> -->
							<span class="d-none  d-sm-block">+ 7 (701) 946 3634</span>

						</div>
					</a>
				</div>
				<div class="col-auto col-lg order-first order-lg-0">
					<div class="clock">
						<div class="row no-gutters">
							<div class="col">
								<div class="cl-it">
									<img class="active" src="/img/clock.png" alt="" width="100%">
									<img class="disable" src="/img/clockW.png" alt="">
									<div class="cl-city d33">
										<h2>City</h2>
									</div>
								</div>
							</div>
							<div class="col d-none  d-lg-block">
								<div class="cl-it">
									<img class="active" src="/img/clock.png" alt="" width="100%">
									<img class="disable" src="/img/clockW.png" alt="">
									<div class="cl-city d33">
										<h2>City</h2>
									</div>
								</div>
							</div>
							<div class="col d-none  d-lg-block">
								<div class="cl-it active">
									<img class="active" src="/img/clock.png" alt="" width="100%">
									<img class="disable" src="/img/clockW.png" alt="">
									<div class="cl-city d33">
										<h2>АСТАНА</h2>
									</div>
								</div>
							</div>
							<div class="col d-none d-lg-block">
								<div class="cl-it">
									<img class="active" src="/img/clock.png" alt="" width="100%">
									<img class="disable" src="/img/clockW.png" alt="">
									<div class="cl-city d33">
										<h2>City</h2>
									</div>
								</div>
							</div>
							<div class="col d-none d-lg-block">
								<div class="cl-it">
									<img class="active" src="/img/clock.png" alt="" width="100%">
									<img class="disable" src="/img/clockW.png" alt="">
									<div class="cl-city d33">
										<h2>City</h2>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto  d-lg-none">
					<div class="nav-menu">
						<i class="icon ion-ios-menu fa-3x"></i>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<?php require_once("top/nav.php"); ?>
	<div class="bl-it">
		<?php require_once("bl/bl_1.php"); ?>
	</div>











	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
	<script src="/modules/owlcarousel/owl.carousel.min.js"></script>
	<script src="/js/resize.js"></script>
	<script src="/js/jquery.waypoints.min.js"></script>
	<script src="/js/index.js"></script>
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