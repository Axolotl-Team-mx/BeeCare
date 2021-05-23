<?php

$consulta = ConsultarProducto($_GET['no']);

function ConsultarProducto($no_locId)
{
  include "conexion.php";
  $sql = "SELECT * FROM Localizacion WHERE locId= ?;";
  $params = array($no_locId);

  $stmt = sqlsrv_query($conn, $sql, $params);
  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
    printf("Algo fallo");
  }

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
  <style type="text/css">
    @import url("css/mycss.css");
  </style>
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

    <div id="cabecera">
      <img src="images/swirl.png" width="1188" id="img1">
    </div>

    <div id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span>
          <h1>Modificar Producto</h1>
        </span>
        <br>
        <form action="modif_loc2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
          <input type="hidden" name="habId" value="<?php echo $_GET['no'] ?>">

          <label>Nombre de la habitación: </label>
          <input type="text" id="Nombre" name="habName" value="<?php echo $_GET[1] ?>"><br>

          <label>Descripcion: </label>
          <input type="text" id="Descripcion" name="habDescription" value="<?php echo $_GET[1] ?>"><br>

          <br>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>

    </div>

    <div id="footer">
      <img src="images/swirl2.png" id="img2">
    </div>

  </div>


</body>

</html>