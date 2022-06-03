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
                    <div id="hero" class="homepage-slider3">
                        <h1>Gastos de envío</h1>
                        <p><strong>"¿Cuánto debo abonar en concepto de gastos de envío?"</strong></p>
                        <p>En Physique 24 Gym garantizamos el envío gratuito a partir de un importe mínimo de compra en función de la dirección de entrega:</p>
                            <ul>
                                <li><span class="titulo">PENÍNSULA:</span>
                                    <ul>
                                        <li>A partir de 29,99€: <span class="green"><em>ENVÍO GRATIS</em></span></li>
                                        <li>Importe inferior a 29,99€: <span class="minimus"><em>envío a domicilio +2,99€ o punto de recogida +1,99€.</em></span></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li><span class="titulo">CANARIAS:</span>
                                    <ul>
                                        <li>A partir de 29,99€: <span class="green"><em>ENVÍO GRATIS</em></span></li>
                                        <li>Importe inferior a 29,99€: <span class="minimus"><em>envío a domicilio +3,99€.</em></span></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li><span class="titulo">BALEARES:</span>
                                    <ul>
                                        <li>A partir de 39,99€: <span class="green"><em>ENVÍO GRATIS</em></span></li>
                                        <li>Importe inferior a 39,99€: <span class="minimus"><em>envío a domicilio +4,99€ o punto de recogida +3,99€.</em></span></li>
                                    </ul>
                                </li>
                            </ul>
                        <p>Nuestro sistema calculará los gastos de envío y establecerá automáticamente la compañía de envío más favorable para ti en función de los siguientes factores:</p>
                        <p>- Peso real de los artículos que contenga tu cesta.</p>
                        <p>- Valor final de los artículos que contenga tu cesta.</p>
                        <p>- Las tarifas actualizadas de las compañías de envíos.</p>
                        <p>- Dirección de entrega de tu pedido.</p>
                        <br>
                        <div class="extra">
                            <p><strong><span class="">⚠ </span>RECARGO POR SOBREPESO:<br></strong></p>
                            <p>En pedidos superiores a 20kg deberás abonar un recargo por sobrepeso en función de tu zona de entrega:</p>
                            <p>- Península: +0,50€ por kilo extra</p>
                            <p>- Baleares: +0,99€ por kilo extra</p>
                            <p>- Canarias: +0,50€ por kilo extra</p>

                            <p >* El recargo se calculará en función del peso total del pedido: se tendrá en cuenta el peso real de cada
                            producto (envase incluido) y el de los materiales necesarios para su empaquetado (caja, relleno, etc.).</p>
                            <p>* Podrás comprobar si tu pedido tiene recargo tanto en la cesta de la compra como justo antes de pagar.</p>
                            <br><br>
                        </div>
                        <br><br>
                    </div>
                </div>   
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