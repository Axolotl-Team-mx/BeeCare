<?php

ModificarProducto($_POST['habName'], $_POST['habDescription'], $_POST['habId']);

function ModificarProducto($nom, $descrip, $id_prod)
{
	include 'conexion.php';
	$sql = "UPDATE Habitacion SET habName=? , habDescription=? WHERE habId=?;";
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