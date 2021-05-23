<?php
include 'conexion.php';
require_once 'modelo2.php';

$modelo = new Validacion();

$modelo->NomUsr = $_POST['txtusrNomUsr'];
$modelo->Contrasena = $_POST['txtusrContrasena'];

$filaLogear = $modelo->ValidacionUsr();

?>

<!DOCTYPE html>
<html>
<?php
define('TITLE', 'Inicio');
?>

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - <?php echo TITLE ?></title>
  <?php include 'head.php'; ?>
  <style type="text/css">
    @import url("assets/bootstrap/css2/mycss.css");
  </style>
  <link href="assets/bootstrap/css2/bootstrap.css" rel="stylesheet" type="text/css">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>

  <div class="container">

    <?php
    if ($filaLogear > 0) {
      $sql = "SELECT * FROM Usuario WHERE usrNomUsr='$modelo->NomUsr'";
      $stmt = sqlsrv_query($conn, $sql);
      if ($stmt === false) {
        die(print_r(sqlsrv_errors(), true));
        printf("Algo salio mal");
      }
      while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        echo "Bienvenido ";
        echo $row['usrNombre'];
      }
    } else {
      echo '<script type="text/javascript">
    alert("El usuario o contraseña son incorrectos.");
    window.location.href="sesion.php";
    </script>';
      exit();
    }
    ?>

    <div class="todo">

      <div id="contenido">
        <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
          <thead>
            <th>Id de la Localización.</th>
            <th>Nombre de la Localización</th>
            <th>Descripción</th>
            <th></th>
            <th> <a href="assets/nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
          </thead>

          <?php
          include "conexion.php";
          $sql = "SELECT * FROM Localizacion";
          $stmt = sqlsrv_query($conn, $sql);
          if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
            printf("Algo fallo");
          }
          while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>";
            echo $row['locId'];
            echo "</td>";
            echo "<td>";
            echo $row['locName'];
            echo "</td>";
            echo "<td>";
            echo $row['locLon'];
            echo "</td>";
            echo "<td>";
            echo $row['locLat'];
            echo "</td>";
            echo "<td><a href='assets/modif_loc.php?no=" . $row['locId'] . "'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo " <td><a href='assets/eliminar_prod.php?no=" . $row['locId'] . "'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
            echo "</tr>";
          }
          ?>
        </table>
      </div>
    </div>




  </div>
  <footer>
    <?php include 'footer.php'; ?>
  </footer>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>