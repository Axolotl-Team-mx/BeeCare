<?php

ModificarProducto($_POST['locName'], $_POST['locLon'], $_POST['locLat'],$_POST['locId']);

function ModificarProducto($locName, $locLon,$locLat,$locId)
{
	include 'conexion.php';
	$sql = "UPDATE Localizacion SET locName=? , locLon=?, locLat=? WHERE locId=?;";
	$params = array($locName, $locLon,$locLat,$locId);

	$stmt = sqlsrv_query($conn, $sql, $params);
	if ($stmt === false) {
		die(print_r(sqlsrv_errors(), true));
	}
}
?>

<script type="text/javascript">
	alert("Datos Actualizados Exitosamante!!");
	window.location.href = 'main.php';
</script>