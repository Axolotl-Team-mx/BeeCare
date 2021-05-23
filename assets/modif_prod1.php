<?php

$consulta = ConsultarProducto($_GET['no']);

function ConsultarProducto($no_prod)
{
  include "conexion.php";
  $sql = "SELECT * FROM Localizacion WHERE locId= ?;";
  $params = array($no_prod);

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
<<<<<<< HEAD:assets/modif_prod1.php
  <title>Modificar localizaciones</title>
  <style type="text/css">
    @import url("css/mycss.css");
  </style>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
=======
  <title>Modificar Producto</title>
  <style type="text/css">
    @import url("assets/bootstrap/css2/mycss.css");
  </style>
  <link href="assets/bootstrap/css2/bootstrap.css" rel="stylesheet" type="text/css">
>>>>>>> 8409fa4929976f709addc88d1ff16d823822994e:modif_loc.php
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
  <div class="todo">
<<<<<<< HEAD:assets/modif_prod1.php

    <div id="cabecera">
      <?php include "header.php" ?>
    </div>

=======
>>>>>>> 8409fa4929976f709addc88d1ff16d823822994e:modif_loc.php
    <div id="contenido">
      <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <span>
          <h1>Modificar Producto</h1>
        </span>
        <br>
<<<<<<< HEAD:assets/modif_prod1.php
        <form action="assets/modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
          <input type="hidden" name="habId" value="<?php echo $_GET[0] ?>">

          <label>Nombre de la localización: </label>
          <input type="text" id="Nombre" name="habName" value="<?php echo $_GET[1] ?>"><br>
          <label>Long: </label>
          <input type="text" id="Long" name="locLon" value="<?php echo $_GET[2] ?>"><br>
          <label>Lat: </label>
          <input type="text" id="Lat" name="locLat" value="<?php echo $_GET[3] ?>"><br>
=======
        <form action="modif_loc2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
          <input type="hidden" name="locId" value="<?php echo $_GET['no'] ?>">

          <label>Nombre de la Localización: </label>
          <input type="text" id="locName" name="locName" value="<?php echo $_GET[1] ?>"><br>

          <label>Longitud de la Localización: </label>
          <input type="text" id="locLon" name="locLon" value="<?php echo $_GET[1] ?>"><br>

          <label>Latitud de la Localización: </label>
          <input type="text" id="locLat" name="locLat" value="<?php echo $_GET[1] ?>"><br>
>>>>>>> 8409fa4929976f709addc88d1ff16d823822994e:modif_loc.php

          <br>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
      </div>

    </div>
<<<<<<< HEAD:assets/modif_prod1.php
    <footer>
      <?php include "include.php" ?>
    </footer>
=======

>>>>>>> 8409fa4929976f709addc88d1ff16d823822994e:modif_loc.php
  </div>


</body>

</html>