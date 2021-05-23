<?php

$consulta = ConsultaReporte($_GET['no']);

function ConsultaReporte($id)
{
  include "conexion.php";
  $sql = "SELECT * FROM Localizacion WHERE locId= ?;";
  $params = array($id);

  $stmt = sqlsrv_query($conn, $sql, $params);
  if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
    printf("Algo fallo");
  }
}
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
              Agregar un nuevo reporte
            </h1><span class="subheading">Recuerda tomar con seriedad los reportes</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div>
    <div class="container">
      <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
        <input type="hidden" name="locId">

        <label>Descripción/Nombre del reporte: </label>
        <input type="text" id="Nombre" name="locName" ><br>

        <label>Longitud: </label>
        <input type="text" id="Longitud" name="locLon"><br>

        <label>Latitud: </label>
        <input type="text" id="Latitud" name="locLan" ><br>

        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
      </form>
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