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
                        <h1>Sobre nosotros</h1><span class="subheading">Puedes encontrar lo relacionado a nosotros</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-md-10 col-lg-12 mx-auto">
            <p>En este apartado puedes encontrar informacion referente a nosotros, no dudes en ir a la parte de abajo de esta página para poder encontrar nuestro metodo de contacto.</p>
            <section class="team-clean" style="text-align: center;">
                <div class="container" style="text-align: center;">
                    <div class="intro">
                        <h2 class="text-center">Team </h2>
                        <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
                    </div>
                    <div class="row people" style="text-align: center;">
                        <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/Perfiles/profileAlvaro.jpg">
                            <h3 class="name">Álvaro González</h3>
                            <p class="title">Musician</p>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                        </div>
                        <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/Perfiles/profileAbril.jpg">
                            <h3 class="name">Abril Ramirez</h3>
                            <p class="title">Musician</p>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                        <div class="col-md-6 col-lg-4 item"><img class="rounded-circle" src="assets/img/Perfiles/profileDaniel.jpg">
                            <h3 class="name">Daniel Corona</h3>
                            <p class="title">Artist</p>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                        <div class="col-md-6 col-lg-4 item" style="text-align: center;"><img class="rounded-circle" src="assets/img/Perfiles/profileChris.jpg">
                            <h3 class="name">Christian Arellano</h3>
                            <p class="title">Stylist</p>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper massa. </p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </section>
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