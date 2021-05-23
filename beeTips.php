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
    </section>
    <section class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <div>
                        <img id="blah" alt="your image" width="100" height="100" />

                        <input type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                    <h1 class="text-center">La apicultura</h1>
                    <div class="text">
                        </figure>
                        <h2>¿Qué es la apicultura?</h2>
                        <p style="text-align: justify;">La apicultura es la crianza y cuidado de las abejas, a través de esta se obtienen productos como miel, jalea real, propóleo, cera y polen. </p>
                    </div>
                    <div class="text">
                        <figure class="figure d-block"><img class="figure-img" src="assets/img/apicultor.jpg" width="600px" height="400px">
                        </figure>
                        <h2>La apicultura en México</h2>
                        <p style="text-align: justify;">La polinización es un proceso fundamental para la supervivencia de los ecosistemas, esencial para la producción y reproducción de muchos cultivos y plantas silvestres. Casi el 90 por ciento de las plantas con flores dependen de la polinización para reproducirse; asimismo, el 75 por ciento de los cultivos alimentarios del mundo dependen en cierta medida de la polinización y el 35 de las tierras agrícolas mundiales. Los polinizadores no solo contribuyen directamente a la seguridad alimentaria, sino que además son indispensables para conservar la biodiversidad.

                            la apicultura es una de las actividades de mayor relevancia por el impacto que tiene en el desarrollo sostenible como por ejemplo en la producción de alimentos y el equilibrio de ecosistemas.</p>
                    </div>
                    <div class="text">
                        <figure class="figure d-block"><img class="figure-img" src="assets/img/AgroBaja.jpg" width="600px" height="400px">
                        </figure>
                        <h2>La apicultura en Baja California</h2>
                        <p style="text-align: justify;">Apicultores de Baja California produjeron durante la temporada 2020, un total de 70 toneladas de miel de abeja, así lo dio a conocer el Ingeniero Juan Manuel Martínez Núñez, titular de la Representación Estatal de la Secretaría de Agricultura y Desarrollo Rural. Destacó que la mayor producción de miel se registró en los apiarios pertenecientes al Distrito de Desarrollo Rural 002, Río Colorado –Valle de Mexicali-, en donde se reporta la producción de 58 toneladas. En Distrito de Desarrollo Rural 001, Zona Costa, que incluye los municipios de Tecate, Tijuana, Playas de Rosarito y Ensenada, se produjeron 12 toneladas de miel. El padrón de productores de esta zona, oscila en los 51 apicultores, concentrados en su mayoría, en las zonas rurales del municipio de Ensenada. </p>
                    </div>
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