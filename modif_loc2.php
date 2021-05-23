<?php

ModificarProducto($_POST['locId'], $_POST['locLon'], $_POST['locLat']);

function ModificarProducto($nom, $long, $lat)
{
	include 'conexion.php';
	$sql = "UPDATE Localizacion SET locName=? , locLon=? , locLat=? WHERE habId=?;";
	$params = array($nom, $descrip, $id_prod);

	$stmt = sqlsrv_query($conn, $sql, $params);
	if ($stmt === false) {
		die(print_r(sqlsrv_errors(), true));
	}
}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href = 'index.php';
</script>