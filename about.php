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
            <section class="team-clean" style="text-align: center;">
                <div class="container" style="text-align: center;">
                    <div class="intro">
                        <img src="assets/img/BeeCareLogo.png" alt="">
                        <h2 class="text-center">Nuestro equipo </h2>
                        <p class="text-center">AxolotlTeam es un grupo de estudiantes de ingeniería que busca participar y sobresalir en los diferentes concursos. <br> También nos agrada la idea de aprender mas sobre las herramientas que nos permitan cambiar la perspectiva de la sociedad buscando un cambio positivo en ella. </p>
                    </div>
                    <div class="row people" style="text-align: center;">
                        <div class="col-md-6 col-lg-4 item">
                            <img class="rounded-circle" src="assets/img/Perfiles/profileAlvaro.jpg">
                            <h3 class="name">Álvaro González</h3>
                            <p class="title">Desarrollador de software</p>
                            <p class="description">
                            Me gusta mucho participar en eventos de innovación y emprendimiento, entre las tecnologías en las que me he desempeñado se encuentra la manipulación de servidores para bases de datos y páginas web. 
                            </p>
                            <div class="social">
                                <a href="https://www.facebook.com/aggm123/">
                                    <i class="fa fa-facebook-official"></i>
                                </a>
                                <a href="https://twitter.com/aggm123">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="https://github.com/Alvaroggm123">
                                    <i class="fa fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 item">
                            <img class="rounded-circle" src="assets/img/Perfiles/profileAbril.jpg">
                            <h3 class="name">Abril Ramirez</h3>
                            <p class="title">Desarrolladora de software</p>
                            <p class="description">
                                Hola, soy Abril, actualmente soy estudiante de ingeniería en Sistemas Computacionales, me especializo en desarrollo de software y soy excelente trabajando bajo presión.
                            </p>
                            <div class="social">
                                <a href="https://www.facebook.com/abril.ramirez.9235">
                                    <i class="fa fa-facebook-official"></i>
                                </a>
                                <a href="https://github.com/iscRamirezAbril">
                                    <i class="fa fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 item">
                            <img class="rounded-circle" src="assets/img/Perfiles/profileDaniel.jpg">
                            <h3 class="name">Daniel Corona</h3>
                            <p class="title">Desarrollador back-end</p>
                            <p class="description">
                                Estudiante en la carrera de ingeniería en sistemas computacionales, me encanta todo lo relacionado al desarrollo de páginas web y los artículos sobre avances tecnológicos.
                            </p>
                            <div class="social">
                                <a href="https://www.facebook.com/alejandro.corona995">
                                    <i class="fa fa-facebook-official"></i>
                                </a>
                                <a href="https://github.com/corona9955">
                                    <i class="fa fa-github"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 item">
                            <img class="rounded-circle" src="assets/img/Perfiles/profileChris.jpg">
                            <h3 class="name">Christian Arellano</h3>
                            <p class="title">Desarrollador back-end</p>
                            <p class="description">
                                Soy estudiante universitario enfocado en la carrera de ing. Sistemas Computacionales. Me gusta mucho el mundo de la programación y tecnologías, encuentro una gran fascinación por la inteligencia artificial y el análisis de datos.
                            </p>
                            <div class="social">
                                <a href="https://www.facebook.com/christian.arellano.121">
                                    <i class="fa fa-facebook-official"></i>
                                </a>
                                <a href="https://github.com/chrisare1718">
                                    <i class="fa fa-github"></i>
                                </a>
                            </div>
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