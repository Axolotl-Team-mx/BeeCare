<?php
EliminarProducto($_GET['no']);

function EliminarProducto($no)
{
	include 'conexion.php';
	$sql = "DELETE FROM Localizacion WHERE locId= ? ;";
	$params = array($no);

	$stmt = sqlsrv_query($conn, $sql, $params);
	if ($stmt === false) {
		die(print_r(sqlsrv_errors(), true));
	}
}
?>

<script type="text/javascript">
	alert("Reporte eliminado correctamente, se cerrará la sesión.");
	window.location.href = 'index.php';
</script>