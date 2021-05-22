<!DOCTYPE html>
<html>
<?php
define('TITLE', 'Bee care');
?>

<head>
    <title>About - <?php echo TITLE ?></title>
    <?php include 'head.php'; ?>
</head>

<body>
    <?php include 'header.php' ?>
    <header class="masthead" style="background-image:url('assets/img/post-bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-12 mx-auto position-relative">
                    <div class="post-heading">
                        <h1>AxolotlTeam - BeeCare</h1>
                        <h2 class="subheading">Bzz bzz</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="map-clean">
        <section class="article-clean">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                        <div class="intro">
                            <h1 class="text-center">Your Wonderful Article Title</h1><img class="img-fluid" src="assets/img/desk.jpg">
                        </div>
                        <div class="text">
                            <p>Sed lobortis mi. Suspendisse vel placerat ligula. <span style="text-decoration: underline;">Vivamus</span> ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                            <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit <em>pulvinar dict</em> vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                            <h2>Aliquam In Arcu </h2>
                            <p>Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                            <figure class="figure d-block"><img class="figure-img" src="assets/img/beach.jpg">
                                <figcaption class="figure-caption">Caption</figcaption>
                            </figure>
                            <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae. Suspendisse vel placerat ligula. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="450"></iframe>
    </section>
    <article>
        <div class="container">
            <div class="simple-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </article>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>