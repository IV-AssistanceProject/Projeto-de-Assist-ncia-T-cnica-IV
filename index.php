<?php require_once 'Crud/connect.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="images/LOGo_IV.png" type="image/x-png">	
<title>Assistência</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Bootstrap Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	
	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" id="theme-switch" href="css/style.css">


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Cookie -->
	<script src="js/jquery.cookie.js"></script>
	<script>
	if ( $.cookie('styleCookie') === 'style-light.css') {
		$('html, body').css('background', '#eeeeee');
	} else if ($.cookie('styleCookie') === 'style.css') {
		$('html, body').css('background', '#222222');
	}
	
	</script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>

	<!-- Viewport Units Buggyfill -->
	<script src="js/viewport-units-buggyfill.js"></script>

	<!-- Googgle Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	
	<!-- Main JS  -->
	<script src="js/main.js"></script>

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>

	<body>
	
	<!-- Loader -->
	<div class="fh5co-loader"></div>
	
	<div id="fh5co-page">
		<nav id="fh5co-nav" role="navigation">
			<ul>
				<li class="animate-box fh5co-active"><a href="index.html" class="transition">Home</a></li>
				<li class="animate-box"><a href="orcamento.php" class="transition">Orçamento</a></li>
			</ul>
			<a class="style-toggle js-style-toggle" data-style="default" href="#">
				<span class="fh5co-circle"></span>
			</a>
		</nav>
		
		<header id="fh5co-header" role="banner" class="fh5co-project js-fh5co-waypoint no-border" data-colorbg="#222222" data-next="yes">
			<div class="container">
				<div class="fh5co-text-wrap animate-box">
					<div class="fh5co-intro-text">
						<h1><span>IV</span>
						<br><span>Assistencia Técnica</span></h1>
						<h2>Feito por <a href="http://freehtml5.co/" target="_blank">IVstudio</a></h2>
					</div>
				</div>
			</div>
			<div class="btn-next animate-box fh5co-learn-more">
				<a href="#" class="scroll-btn">
					<span>Conheça Nosso Portifólio</span>
					<i class="icon-chevron-down"></i>
				</a>
			</div>
		</header>
		<!-- data-colorbg="#8cc53e"  -->
		<div class="fh5co-project js-fh5co-waypoint" data-bgcolor="" data-next="yes">
			<div class="container">
				<div class="fh5co-project-inner row">
					<div class="fh5co-imgs col-md-8 animate-box">
						<div class="img-holder-1 animate-box">
							<img src="images/integridade.jpg" alt="Free HTML5 Bootstrap Template">
						</div>
						<div class="img-holder-2 animate-box">
							<img src="images/Design.jpg" alt="Free HTML5 Bootstrap Template">
						</div>
					</div>
					<div class="fh5co-text col-md-4 animate-box">
						<h2>Software</h2>
						<p>Fazemos a manutenção de Softwares lentos, formatação e
						instalação em Notbooks, PCs e Celulares dos seguintes sistemas: Linux(todas as versões) e Windows (todas as versões) </p>
						<p><a href="orcamento.php" class="btn btn-light btn-outline transition">Contratar</a>
						</p>
					</div>
				</div>

			</div>
		</div>
		<!-- data-colorbg="#FF6138" -->
		<div class="fh5co-project js-fh5co-waypoint fh5co-reverse" data-colorbg="" data-next="yes">
			<div class="container">
				<div class="fh5co-project-inner row">
					<div class="fh5co-imgs col-md-8 col-md-push-4 animate-box">
						<div class="img-holder-1 animate-box">
							<img src="images/hard_big.jpg" alt="Free HTML5 Bootstrap Template">
						</div>
						<div class="img-holder-2 animate-box">
							<img src="images/hard.jpg" alt="Free HTML5 Bootstrap Template">
						</div>
					</div>
					<div class="fh5co-text col-md-4 col-md-pull-8 animate-box">
						<h2>Hardware</h2>
						<p>Fazemos a manutenção de diversas maquinas assim como o concerto e troca de peças.</p>
						<p><a href="orcamento.php" class="btn btn-light btn-outline transition">Contratar</a></p>
					</div>
				</div>

			</div>
		</div>
		
		<!-- data-colorbg="#2d4059" -->
		<div class="fh5co-project js-fh5co-waypoint" data-colorbg="" data-next="yes">
			<div class="container">
				<div class="fh5co-project-inner row">
					<div class="fh5co-imgs col-md-8 animate-box">
						<div class="img-holder-1 animate-box">
							<img src="images/console_b8u4.jpg" alt="Free HTML5 Bootstrap Template">
						</div>
						<div class="img-holder-2 animate-box">
							<img src="images/console_small.jpg" alt="Free HTML5 Bootstrap Template">
						</div>
					</div>
					<div class="fh5co-text col-md-4 animate-box">
						<h2>Consoles</h2>
						<p>Fazemos o concerto e tambem a troca de peças dos consoles mais atuais, por exemplo: PS4, XBOX oneX, Switch e etc.</p>
						<p><a href="orcamento.php" class="btn btn-light btn-outline transition">Contratar</a></p>
					</div>
				</div>

			</div>
		</div>
		<!-- data-colorbg="#7bc74d" -->
		<div class="fh5co-project js-fh5co-waypoint fh5co-reverse" data-colorbg="">
			<div class="container">
				<div class="fh5co-project-inner row">
					<div class="fh5co-imgs col-md-8 col-md-push-4 animate-box">
						<div class="img-holder-1 animate-box">
							<img src="images/mob.png" alt="Free HTML5 Bootstrap Template">
						</div>
						<div class="img-holder-2 animate-box">
							<img src="images/mobile_small.jpg" alt="Free HTML5 Bootstrap Template">
						</div>
					</div>
					<div class="fh5co-text col-md-4 col-md-pull-8 animate-box">
						<h2>Mobile</h2>
						<p>Fazemos o concerto a manutenção e formatação em aparelhos celulares dos mais variados, entre eles: Sansung, LG, Motorola, Xiomi e Apple.</p>
						<p><a href="orcamento.php" class="btn btn-light btn-outline transition">Contratar</a></p>
					</div>
				</div>

			</div>
		</div>
		<footer id="fh5co-footer" class="js-fh5co-waypoint">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p><small>&copy; 2016 Hold. All Rights Reserved. <br> Created by <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a> </small> </p>
						<ul class="fh5co-social">
							<li>
								<a href="#"><i class="icon-twitter"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon-facebook"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon-instagram"></i></a>
							</li>
							<li>
								<a href="#"><i class="icon-dribbble"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

	</div>
	
			
	

	</body>
</html>

