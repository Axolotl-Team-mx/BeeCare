<?php


NuevoReporte($_POST['locName'], $_POST['locLon'], $_POST['locLat']);

function NuevoReporte($nom, $lon, $lat)
{
	include 'conexion.php';
	$sql = "INSERT INTO Localizacion (locName, locLon, locLat) VALUES (?,?,?);";
	$params = array($nom, $lon, $lat);


	$stmt = sqlsrv_query($conn, $sql, $params);
	if ($stmt === false) {
		die(print_r(sqlsrv_errors(), true));
	}
}
?>

<script type="text/javascript">
	alert("¡Reporte generado correctamente, se cerrará la sesión!");
	window.location.href = 'main.php';
</script>