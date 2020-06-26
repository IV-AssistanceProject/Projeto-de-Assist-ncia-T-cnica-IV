<?php require_once 'Crud/connect.php';
?>
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
				<li class="animate-box"><a href="index.php" class="transition">Home</a></li>
				<li class="animate-box fh5co-active"><a href="about.html" class="transition">Orçamento</a></li>
			</ul>
			<a class="style-toggle js-style-toggle" data-style="default" href="#">
				<span class="fh5co-circle"></span>
			</a>
		</nav>
		<header id="fh5co-header" role="banner" class="fh5co-project js-fh5co-waypoint no-border" data-colorbg="#222222" data-next="yes">
			<div class="container">
				<div class="fh5co-text-wrap animate-box">
					<div class="fh5co-intro-text">
						<h1><span>Faça seu Orçamento</span></h1>
						<h2>Feito por <a href="http://freehtml5.co/" target="_blank">IVstudio</a></h2>
					</div>
				</div>
			</div>
			<div class="btn-next animate-box fh5co-learn-more">
				<a href="#" class="scroll-btn">
					<span>Formulário</span>
					<i class="icon-chevron-down"></i>
				</a>
			</div>
		</header>

		<div class="js-fh5co-waypoint fh5co-project-detail" id="fh5co-main" data-colorbg="">
			<div class="container">

				
				<div class="row">
					<div class="col-md-12">
						
						<div class="row row-bottom-padded-sm animate-box">
							<div class="col-md-3">
								<h3 class="fh5co-section-heading"><center> Preencha Aqui suas informações</center></h3>
							</div>
							<div class="col-md-9">
								<form action="Crud/create.php" method="post">
									<p>Nome:
									<input type="text" name="nome" class="form-control" placeholder="Nome" maxlength="30"></p>
									<p>Email:
									<input type="email" name="email" class="form-control" placeholder="Email" maxlength="30"></p>
									<p>CPF:
									<input type="text" name="cpf" class="form-control" placeholder="CPF" maxlength="30"></p>
									<p>Telefone:
									<input type="text" name="telefone" class="form-control" placeholder="Telefone" maxlength="30"></p>
									<p>Serviços:
									<select name="servicos" class="form-control">
										<option value="">Serviços</option>
										<option value="Conserto">Conserto</option>
										<option value="Manutencao">Manutenção</option>
										<option value="Instalacao">Instalação</option>
									</select></p>
									<p>Produtos:
									<select name="produtos" class="form-control">
										<option value="">Produtos</option>
										<option value="Computador de mesa">Computador de mesa</option>
										<option value="Notebook">Notebook</option>
										<option value="Smartphone">Smartphone</option>
										<option value="Console">Console</option>
									</select></p>
									<p>Forma de Pagamento:
									<select name="pagamento" class="form-control">
										<option value="">Tipo</option>
										<option value="boleto">Boleto</option>
										<option value="cartao">Cartão</option>
									</select></p>
									<br>
									<ul class="actions">
										<button type="submit" class="btn btn-light btn-outline transition">Enviar</button>
									</ul>
								</form>
							</div>
						</div>

						<div class="row row-bottom-padded-sm animate-box">
							<div class="col-md-12">
								<figure class="fh5co-bio-photo"><center><img src="images/conserto-de-notebook-rio-de-janeiro-rj.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template"></center></figure>
							</div>
						</div>


						<div class="row animate-box row-bottom-padded-sm">
							<div class="col-md-3">
								<h3 class="fh5co-section-heading"><span class="fh5co-number">N<sup>o</sup> 2</span> Experience</h3>
							</div>
							<div class="col-md-9">
								
								<p class="fh5co-lead">Design is the creation of a plan or convention for the construction of an object or a system as in architectural blueprints, engineering drawings, business processes, circuit diagrams and sewing patterns.</p>
								<p>Design is the creation of a plan or convention for the construction of an object or a system as in architectural blueprints, engineering drawings, business processes, circuit diagrams and sewing patterns. Design is the creation of a plan or convention for the construction of an object or a system as in architectural blueprints, engineering drawings, business processes, circuit diagrams and sewing patterns.</p>
							</div>
						</div>	
						

						<div class="row animate-box row-bottom-padded-sm">
							<div class="col-md-3">
								<h3 class="fh5co-section-heading"><span class="fh5co-number">N<sup>o</sup> 3</span> Connect</h3>
							</div>
							<div class="col-md-9">
								<ul class="fh5co-social fh5co-stack">
									<li>
										<a href="#"><i class="icon-mail2"></i> weare.isvery@gmail.com</a>
									</li>
									<li>
										<a href="#"><i class="icon-twitter"></i> Twitter</a>
									</li>
									<li>
										<a href="#"><i class="icon-facebook"></i> Facebook</a>
									</li>
									<li>
										<a href="#"><i class="icon-instagram"></i> Instagram</a>
									</li>
									<li>
										<a href="#"><i class="icon-dribbble"></i> Dribbble</a>
									</li>
									
								</ul>
							</div>
						</div>


						<!--
						<div class="row animate-box">
							<div class="col-md-3">
								<h3 class="fh5co-section-heading"><span class="fh5co-number">N<sup>o</sup> 4</span> My Location</h3>
							</div>
							<div class="col-md-12">
								<div id="fh5co-map"></div>
							</div>
						</div>

						-->

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

<!--<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeAmaVxz5OF4Qdv-uA3jSOYz4LRXZNCiKOrPU4ukbpZnoeCqw/viewform?embedded=tue" width="640" height="1372" frameborder="0" marginheigh="0" marginwidth="0">Loading...</iframe>-->

