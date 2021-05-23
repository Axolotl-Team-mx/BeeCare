<?php


NuevoProducto($_POST['locName'], $_POST['locLon'], $_POST['locLat']);

function NuevoProducto($nom, $lon, $lat)
{
	include 'conexion.php';
	$sql = "INSERT INTO Localizaciones (locName, locLon, locLat) VALUES (?, ?, ?);";
	$params = array($nom, $lon, $lat);


	$stmt = sqlsrv_query($conn, $sql, $params);
	if ($stmt === false) {
		die(print_r(sqlsrv_errors(), true));
	}
}
?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href = 'main.php';
</script>