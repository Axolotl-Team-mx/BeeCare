<?php

ModificarReporte($_POST['locName'],  $_POST['locLon'], $_POST['locLat'], $_POST['locId']);

function ModificarReporte($nom, $long, $lat, $id)
{
	include 'conexion.php';
	$sql = "UPDATE Localizacion SET locName=? , locLon=? , locLat=? WHERE locId=?;";
	$params = array($nom, $long, $lat, $id);

	$stmt = sqlsrv_query($conn, $sql, $params);
	if ($stmt === false) {
		die(print_r(sqlsrv_errors(), true));
	}
}
?>

<script type="text/javascript">
	alert("¡Datos Actualizados Exitosamante!, se cerrará la sesión.");
	window.location.href = 'index.php';
</script>