<?php 
session_start();
error_reporting(0);
include('includes/config.php');
include('includes/validacion.php');
$query=mysqli_query($con,"select max(orderId) as 'next' from orders where userId='".$_SESSION['id']."' and paymentMethod is not null");
$pedido=mysqli_fetch_array( $query );
$ord=$pedido[0]+1;
if(strlen($_SESSION['login'])==0){   
	header('location:login.php');
}
else{
	if (isset($_POST['submit'])) {
		mysqli_query($con,"update orders set paymentMethod='Debit / Credit card',orderId='".$ord."'  where userId='".$_SESSION['id']."' and paymentMethod is null ");
		unset($_SESSION['cart']);
		header('location:order-history.php');
	}
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

	    <title>Método de Pago</title>
	    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
	    <link rel="stylesheet" href="assets/css/main.css">
	    <link rel="stylesheet" href="assets/css/red.css">
	    <link rel="stylesheet" href="assets/css/owl.carousel.css">
		<link rel="stylesheet" href="assets/css/owl.transitions.css">
		<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
		<link href="assets/css/lightbox.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/rateit.css">
		<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
		<link rel="stylesheet" href="assets/css/config.css">

		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="assets/images/favicon.ico">
	</head>
    <body class="cnt-home">
	
		
<header class="header-style-1">
<?php include('includes/top-header.php');?>
<?php include('includes/main-header.php');?>
<?php include('includes/menu-bar.php');?>
</header>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Inicio</a></li>
				<li class='active'>Método de Pago</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-bd">
	<div class="container">
		<div class="checkout-box faq-page inner-bottom-sm">
			<div class="row">
				<div class="col-md-12">
				<?php
                if (isset($_SESSION['id'])) {
                    $usuario = $_SESSION['id'];
                }
                ?>

                <div class="col-lg-9">
                    

                    <?php
                    if (
                        isset($_SESSION['errores'])
                        && !empty($_SESSION['errores'])
                    ) {
                        ?>
                        <div class="my-4">
                            <div class="alert alert-danger" role="alert">
                                <?php foreach ($_SESSION['errores'] as $error) { ?>
                                    <span><?= $error; ?></span><br>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['errores']);
                    }
                    ?>

                    <form class="my-4" name="realizar-pago" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" novalidate>
                        <?php if (empty($usuario)) { ?>
                            <p class="h4">Datos de usuario</p>
                            
                        <?php } else { ?>
							<?php $qry=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
								while ($rt=mysqli_fetch_array($qry)) {
							?>	
                            <input type="hidden" name="email" value="<?php echo htmlentities($rt['email']); ?>">
                        
							<p class="h4">Datos de envío</p>

							<div class="form-group">
								<label for="nombre">Nombre</label>
								<input type="text" id="nombre" class="form-control" name="nombre" required="" autofocus=""
								value="<?php echo htmlentities($rt['name']); ?>">
							</div>

							<div class="form-group">
								<label for="direccion">Dirección</label>
								<input type="direccion" id="direccion" class="form-control" name="direccion" required="" autofocus="" placeholder=""
								value="<?php echo htmlentities($rt['billingAddress']); ?>">
							</div>

							<div class="form-group">
								<label for="telefono">Teléfono</label>
								<input type="number" id="telefono" class="form-control" name="telefono" required="" autofocus=""
								value="<?php echo htmlentities($rt['contactno']); ?>">
							</div>

							<p class="h4">Forma de pago</p>

							<div class="form-check my-4">
								<input class="form-check-input" type="radio" name="forma-pago" id="forma-pago" value="tarjeta" checked>
								<label class="form-check-label" for="forma-pago">
									Tarjeta de crédito / débito
								</label>
							</div>

							<div class="form-group">
								<label for="numero-tarjeta">Número de tarjeta</label>
								<div class="input-group">
									<input type="numero-tarjeta" id="numero-tarjeta" class="form-control" name="numero-tarjeta" required=""
									placeholder="0000 0000 0000 0000" maxlength="16"
									value="<?= isset($_POST['numero-tarjeta']) ? $_POST['numero-tarjeta'] : ''; ?>">
									<div class="input-group-append">
										<span class="input-group-text">
											&#128179;
										</span>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="form-group col-sm-4">
									<label for="mes-caducidad">Mes</label>
									<select class="form-control" id="mes-caducidad" name="mes-caducidad">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
									</select>
								</div>
								<div class="form-group col-sm-4">
									<label for="anyo-caducidad">Año</label>
									<select class="form-control" id="anyo-caducidad" name="anyo-caducidad">
										<option value="2022">2022</option>
										<option value="2023">2023</option>
										<option value="2024">2024</option>
										<option value="2025">2025</option>
										<option value="2026">2026</option>
										<option value="2027">2027</option>
										<option value="2028">2028</option>
										<option value="2020">2029</option>
										<option value="2021">2030</option>
									</select>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label for="cvc">CVV/CVC</label>
										<input class="form-control" id="cvc" name="cvc" type="text" placeholder="123">
									</div>
								</div>
							</div>

							<div class="d-flex justify-content-end">
								<input type="submit" name="submit" class="btn btn-primary" value="Realizar Pedido">
							</div>
							<?php } ?>
						<?php } ?>
                    </form>
				</div>

			</div><!-- /.row -->
		</div><!-- /.checkout-box -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<?php echo include('includes/brands-slider.php');?>
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
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
<?php } ?>