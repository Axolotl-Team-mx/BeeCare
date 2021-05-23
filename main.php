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
define('TITLE', 'Axolotl Team');
?>

<head>
  <title>About - <?php echo TITLE ?></title>
  <?php include 'head.php'; ?>
</head>

<body>
  <?php include 'header.php' ?>
  <header class="masthead" style="background-image:url('assets/img/about-bg.jpg');">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto position-relative">
          <div class="site-heading">
            <h1>
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
            </h1><span class="subheading">Puedes encontrar lo relacionado a nosotros</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div>
    <div class="container">
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
        <thead>
          <th>No.</th>
          <th>Nombre/Descripción</th>
          <th>Longitud</th>
          <th>Latitud</th>
          <th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
        </thead>

        <?php
        $sql = "SELECT * FROM Localizacion";
        $stmt = sqlsrv_query($conn, $sql);
        if ($stmt === false) {
          die(print_r(sqlsrv_errors(), true));
          printf("Algo fallo");
        }
        while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
          echo "<tr>";
          echo "<td>"; echo $row['locId']; echo "</td>";
          echo "<td>"; echo $row['locName']; echo "</td>";
          echo "<td>"; echo $row['locLon']; echo "</td>";
          echo "<td>"; echo $row['locLat']; echo "</td>";
          echo "<td><a href='modif_prod1.php?no=".$row['locId']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
          echo " <td><a href='eliminar_prod.php?no=".$row['locId']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
        echo "</tr>";
        }
        ?>
      </table>
    </div>
  </div>
  <footer>
    <?php include 'footer.php'; ?>
  </footer>
  <hr>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
  <script src="assets/js/script.min.js"></script>
</body>

</html>