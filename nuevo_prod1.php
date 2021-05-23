<!DOCTYPE html>
<html>
<?php
define('TITLE', 'Axolotl Team');
?>

<head>
	<title>About - <?php echo TITLE ?></title>
	<?php include 'head.php'; ?>
</head>

<body>
	<?php include 'header.php' ?>
	<header class="masthead" style="background-image:url('assets/img/about-bg.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-8 mx-auto position-relative">
					<div class="site-heading">
						<h1>
							Agregar un nuevo reporte
						</h1><span class="subheading">Recuerda tomar con seriedad los reportes</span>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div>
		<div class="container">
			<form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

				<label>Descripción/Nombre del reporte: </label>
				<input type="text" id="Nombre" name="locName"><br>

				<label>Longitud: </label>
				<input type="text" id="Latitud" name="locLon"><br>

				<label>Langitud: </label>
				<input type="text" id="Longitud" name="locLat"><br>

				<br>
				<button type="submit" class="btn btn-success">Reportar</button>
			</form>
		</div>
	</div>
	<footer>
		<?php include 'footer.php'; ?>
	</footer>
	<hr>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
	<script src="assets/js/script.min.js"></script>
</body>

</html>