<?php

$consulta = ConsultarProducto($_GET['no']);

function ConsultarProducto($id)
{
  include "conexion.php";
  $sql = "SELECT * FROM Localizacion WHERE locId= ?;";
  $params = array($id);

  $stmt = sqlsrv_query($conn, $sql, $params);
  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
    printf("Algo fallo");
  } else
    return [
      $stmt['locId'],
      $stmt['locName'],
      $stmt['locLon'],
      $stmt['locLat']
    ];
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modificar Producto</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <div class="todo">

    <div id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span>
          <h1>Modificar Producto</h1>
        </span>
        <br>
        <form action="modif_loc2.php" method="POST">
          <input type="hidden" name="habId">

          <label>Nombre de la habitación: </label>
          <input type="text" id="Nombre" name="Nombre"><br>
          <label>Longitud: </label>
          <input type="text" id="Longitud" name="Longitud"><br>
          <label>Latitud: </label>
          <input type="text" id="Latitud" name="Latitud"><br>

          <br>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>