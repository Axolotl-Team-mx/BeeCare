<!DOCTYPE html>
<html>
<?php
define('TITLE', '¿Abejas?');
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
                    <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/desk.jpg"></a>
                        <h3 class="name">Article Title</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/building.jpg"></a>
                        <h3 class="name">Article Title</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                    <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/loft.jpg"></a>
                        <h3 class="name">Article Title</h3>
                        <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a class="action" href="#"><i class="fa fa-arrow-circle-right"></i></a>
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