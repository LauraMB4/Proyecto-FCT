<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
	    <meta name="keywords" content="MediaCenter, Template, eCommerce">
	    <meta name="robots" content="all">
	    <title>Devoluciones - Physique 24 Gym</title>
    	<link rel="icon" href="img/logo.ico">

	    <!-- Bootstrap Core CSS -->
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    
	    <!-- Customizable CSS -->
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/red.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

		<!-- Demo Purpose Only. Should be removed in production -->
		<link rel="stylesheet" href="assets/css/config.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="assets/images/favicon.ico">


	</head>
    <body class="cnt-home">
	
		
		<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>

<!-- ============================================== HEADER : END ============================================== -->
				<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-xs" id="top-banner-and-menu">
	<div class="container">
		<div class="furniture-container homepage-container">
		    <div class="row">
			    <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
				<!-- ================================== TOP NAVIGATION ================================== -->
	                <?php include('includes/side-menu.php');?>
                <!-- ================================== TOP NAVIGATION : END ================================== -->
			    </div><!-- /.sidemenu-holder -->		
			    <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
				<!-- ========================================== SECTION – HERO ========================================= -->			                                                          


				<!-- ============================================== INFO BOXES ============================================== -->
				<div class="info-boxes wow fadeInUp">
					<div class="info-boxes-inner">
						<div class="row">
							<img src="img/equipo.jpg" width=550px>
							<p style="text-align: justify;">Somos un grupo de amigos amantes del fitness. Por eso, en estos tiempos de redescubrimiento, decidimos apostar por trabajar 
                         en lo que más nos gusta, y emprender nuestra andadura gimnástica.
                         Primero llegó Physique 24 Gym, el cual tras su rápida evolución y aceptación, y gracias al aprendizaje que nos permitió su 
                         gestión, aprendiendo de nuestros empleados y permitiéndonos una amplia formación, nos animó a emprender otra aventura, en 
                         esta ocasión, de expansión y ambición.
                         <br><br>
                         Hemos decidido abrir esta web para poder llegar a más gente y aportarles todo aquello que tanto aprecian nuestros clientes, 
                         y que tan buena acogida ha tenido.<p>	
						</div><!-- /.row -->
					</div><!-- /.info-boxes-inner -->
				</div><!-- /.info-boxes -->

<!-- ============================================== INFO BOXES : END ============================================== -->	
				</div><!-- /.homebanner-holder -->
			</div>
		</div>
	</div>
</div>
<?php include('includes/footer.php');?>
	
	<script src="assets/js/jquery-1.11.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/echo.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
	<script src="assets/js/bootstrap-slider.min.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <script type="text/javascript" src="assets/js/lightbox.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
	<script src="assets/js/scripts.js"></script>

	<!-- For demo purposes – can be removed on production -->
	
	<script src="switchstylesheet/switchstylesheet.js"></script>
	
	<script>
		$(document).ready(function(){ 
			$(".changecolor").switchstylesheet( { seperator:"color"} );
			$('.show-theme-options').click(function(){
				$(this).parent().toggleClass('open');
				return false;
			});
		});

		$(window).bind("load", function() {
		   $('.show-theme-options').delay(2000).trigger('click');
		});
	</script>
	<!-- For demo purposes – can be removed on production : End -->

	

</body>
</html>