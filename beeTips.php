<!DOCTYPE html>
<html>
<?php
define('TITLE', 'Recomendaciones');
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
                <div>
                    <img id="blah" alt="your image" width="100" height="100" />

                    <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                </div>
              
              <div>
              <img src = "https://www.lavozdelafrontera.com.mx/incoming/24r8qa-20-21-agrobaja-tc-1.jpg/ALTERNATES/LANDSCAPE_768/20-21%20AgroBaja%20TC-1.jpg">
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