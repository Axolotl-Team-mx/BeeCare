<!DOCTYPE html>
<html>
<?php
define('TITLE', 'Inicio');
?>

<head>
    <title>About - <?php echo TITLE ?></title>
    <?php include 'head.php'; ?>
</head>

<body>
    <?php include 'header.php' ?>
    <header class="masthead" style="background-image:url('assets/img/home-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto position-relative">
                    <div class="site-heading">
                        <h1>¿Qué hay de nuevo?</h1><span class="subheading">Aquí encontraras cada una de nuestras nuevas investigaciones o trabajos.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <section class="article-list">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Bee Care</h2>
                    <p class="text-center">Cambiemos la perspectiva en que se visualizan las abejas en México</p>
                </div>
                <div class="row articles">
                    <div class="col-sm-6 col-md-4 item"><a href="bees.php"><img class="img-fluid" src="assets/img/abja.jpg"></a>
                        <h3 class="name">¿Conoces los diferentes tipos de abeja en México?</h3>
                        <p class="description" style="text-align: justify;">Haz clic aquí para obtener información hacerca de los diferentes tipos de abejas que existen en méxico, así como sus clasificaciones, subfamilias, características y especies.</p>
                        <a class="action" href="bees.php">
                            <i class="fa fa-arrow-circle-right">
                            </i> 
                        </a> 
                    </div>             
                    <div class="col-sm-6 col-md-4 item"><a href="beeplants.php"><img class="img-fluid" src="assets/img/plantas.jpg"></a>
                        <h3 class="name">Conoce las plantas favoritas de las abejas.</h3>
                        <p class="description" style="text-align: justify;">Haz clic aquí para conocer algunas de las plantas preferidas de las abejas.</p>
                        <a class="action" href="beeplants.php">
                            <i class="fa fa-arrow-circle-right">
                            </i>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 item"><a href="beeTips.php"><img class="img-fluid" src="assets/img/apicultura.jpg"></a>
                        <h3 class="name">Conoce la apicultura de méxico.</h3>
                        <p class="description" style="text-align: justify;">Haz clic aquí para conocer acerca de la apicultura en México, tomando en cuenta algunos datos estadísticos en la región de baja california.</p>
                        <a class="action" href="beeTips.php">
                            <i class="fa fa-arrow-circle-right">
                            </i>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-4 item"><a href="beedead.php"><img class="img-fluid" src="assets/img/muerte.jpg"></a>
                        <h3 class="name">¿Por qué puede morir una abeja?</h3>
                        <p class="description" style="text-align: justify;">Haz clic aquí para conocer algunas de las causas por las cuales las abejas pueden morir, como lo pueden ser parásitos, bacterias y ácaros, ademas conocer la localización donde estas se encuentran, y algunas de las especies que existen.</p>
                        <a class="action" href="beedead.php">
                            <i class="fa fa-arrow-circle-right">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>