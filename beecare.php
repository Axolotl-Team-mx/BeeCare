<!DOCTYPE html>
<html>
<?php
define('TITLE', 'Bee care');
?>

<head>
    <title>beecare - <?php echo TITLE ?></title>
    <?php include 'head.php'; ?>
    <?php include 'assets/headMapa.php'; ?>
    <meta charset="utf-8" />
</head>

<body onload="GetMap()">
    <?php include 'header.php' ?>
    <header class="masthead" style="background-image:url('assets/img/beecare2.gif');">
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
    <section class="article-clean">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                    <h1 class="text-center">Las abejas</h1>
                    <div class="text">
                        <figure class="figure d-block"><img class="figure-img" src="assets/img/bee.jpg" width="200px" height="200px">
                            <figcaption class="figure-caption">Abeja</figcaption>
                        </figure>
                        <h2>¿Qué son las abejas?</h2>
                        <p>Las abejas son insectos que proveen múltiples beneficios a los humanos. Algunas producen miel y otros productos comercializables que representan la actividad económica de un sector importante de la población en este país. Sin embargo, su principal beneficio es que intervienen en la reproducción de las plantas con flor y por eso son indispensables para mantener la salud de muchos ecosistemas. </p>

                        <h2>¿Cómo viven?</h2>
                        <p>Viven en colonias con una abeja reina acompañada de muchas obreras. Sin embargo, la gran mayoría de especies son de hábitos solitarios. En este caso, una sola abeja (la hembra) se encarga de construir el nido y recolectar el alimento para sus crías.</p>
                        <p>Suelen anidar en:
                            <li>Suelo.</li>
                            <li>Troncos de árboles muertos.</li>
                            <li>Ramas huecas.</li>
                            <li>Paredes de adobe.</li>
                            <li>Vigas de madera.</li>
                            <li>Cavidades artificiales de las construcciones humanas.</li>
                        </p>

                        <h2>¿De qué se alimentan?</h2>
                        <h5>Abejas adultas</h5>
                        <p>Las abejas adultas se alimentan principalmente de néctar que les provee carbohidratos en forma de azúcares y algo de polen, que es su fuente principal de proteínas y lo usan para alimentar a sus crías y el desarrollo de los huevos en las hembras reproductivas. </p>
                        <h5>Abejas de miel y abejorros</h5>
                        <p>Son generalistas en sus preferencias por el polen, es decir, no son muy selectivas en los tipos de flores que visitan; mientras que otras especies sí son bastante selectivas y se especializan en el polen de algunas familias de plantas. </p>

                        <h2>Tipos de abejas en una colmena</h2>
                        <p>Existen <strong>tres tipos de abejas dentro de una colmena:</strong></p>
                        <li><strong>Abeja reina:</strong> es la única hembra que llega a reproducirse en la colmena.</li>
                        <li><strong>Abejas obreras:</strong> Son todas hembras y son todas descendientes de la reina.</li>
                        <li><strong>Zánganos:</strong> Estas abejas son machos; vuelan lejos para reproducirse con otras reinas jóvenes que iniciarán una nueva colonia.</li>

                        <p></p>
                        <h1 class="text-center">Enfermedades en abejas</h1>
                        <h5><strong>Acarapisosis</strong></h5>
                        <p>Es causada por un ácaro microscópico, Acarapis woodi, denominado también ácaro traqueal, un parásito interno del sistema respiratorio de las abejas adultas que se alimenta de hemolinfa. Se ha registrado la acarapisosis en Norteamérica, Sudamérica, Europa y Oriente Medio.</p>

                        <h5><strong>Loque americana</strong></h5>
                        <p>Es una enfermedad grave de las abejas melíferas causada por una bacteria productora de esporas llamada Paenibacillus larvae. Está presente en todo el mundo. La bacteria mata las larvas en las celdillas de cría.</p>

                        <h5><strong>Loque europea</strong></h5>
                        <p>Enfermedad de las abejas melíferas causada por la bacteria Melisococcus plutonius. A pesar del nombre, se encuentra en Norteamérica, Sudamérica, Oriente Medio y Asia. Al igual que la loque americana, las bacterias de la loque europea matan las larvas dejando vacías las celdillas del panal. La enfermedad se transmite por contaminación mecánica de los panales y tiende, por tanto, a persistir año tras año. También puede ser transmitida por las abejas que sobreviven a una infección en la fase larval y diseminan las bacterias en las deyecciones.</p>

                        <h5><strong>Infestación por escarabajo de las colmenas</strong></h5>
                        <p>El pequeño escarabajo de las colmenas, Aethina tumida, es un depredador y parásito de las colonias de abejas melíferas. Es oriundo de África, pero fue introducido en los Estados Unidos, Egipto, Canadá y Australia por el movimiento comercial de abejas. Considerado como una plaga menor en su territorio original, se ha convertido en un problema importante en las zonas donde se ha introducido. Tanto los adultos como las larvas de los escarabajos se alimentan de larvas, polen, miel y cría de abejas. </p>

                        <h5><strong>Tropilaelaps</strong></h5>
                        <p>Existen varias especies de ácaros Tropilaelaps, en particular Tropilaelaps clareae y T. koenigerum. Cada especie tiene un ámbito geográfico distinto, pero todas se encuentran en Asia. Estos ácaros son parásitos externos que se alimentan de las crías de abejas (larvas y pupas) y causan un patrón irregular de crías operculadas y sin opercular, así como deformidades en los adultos. Se diseminan por contacto directo de abeja a abeja o por el movimiento de la cría.</p>

                        <h5><strong>Varroosis</strong></h5>
                        <p>Es causada por un ácaro, un parásito externo de las abejas adultas y de sus crías. Existen cuatro especies de ácaros Varroa, pero Varroa destructor es el más importante. Se encuentra en todo el mundo salvo en Australia y la isla sur de Nueva Zelanda. Es conocido por transmitir un virus que causa deformación del ala, las abejas adultas afectadas con varroosis también presentan el abdomen más corto.</p>

                        <h1 class="text-center">Cuidado de las abejas</h1>
                        <figure class="figure d-block"><img class="figure-img" src="assets/img/beecareoptions.jpg" width="300px" height="200px"></figure>
                        <p>¿Te gustaría ayudar a las abejas? Estas son algunas medidas sencillas para ayudar a las abejas desde casa:</p>
                        <li><strong>Elige plantas nativas para tu jardín: </strong>Las plantas locales van acordes con el ecosistema, así las abejas pueden mantener un ambiente equilibrado polinizando las áreas con plantas que favorecen al lugar. Si deseas sober que plantas son las adecuadas para tu jardín, visita el siguiente apartado: </li>
                        <li><strong>Salvemos a las reinas: </strong>Para cuidar especialmente a las abejas reinas, hay que mantener un jardín floreado sobre todo en primavera con arbustos, flores y árboles. Así, la reina que nace en otoño e hiberna en invierno, podrá iniciar su colonia en primavera.</li>
                        <li><strong>Deja espacios sin composta: </strong>Las abejas para descansar suelen hacer hoyos en el suelo, pero si este está lleno de composta es poco probable que puedan hacerlo.</li>
                        <li><strong>Ten agua a la vista: </strong>Pon agua en un recipiente con piedras para que las abejas puedan aterrizar en ellas.</li>
                        <li><strong>Hazles una casa: </strong>Si tienes un árbol con un hueco, ellas podrán posar ahí en su casa provisional.</li>
                        <li><strong>Elimina el uso de productos químicos y pesticidas para limpiar o ahuyentar insectos: </strong>A veces un vaso de vinagre, un ajo molido o algunas plantas como pesticidas naturales es suficiente para el hogar.</li>

                        <p></p>
                        <h1 class="text-center">Peligros que causan las abejas</h1>
                        <p>Aunque son extremadamente beneficiosos para los cultivos, la salud y la fabricación de productos naturales útiles para el cuerpo y el hogar, la principal desventaja de las abejas son sus <strong>picaduras.</strong> Afortunadamente, solo pican cuando se sienten amenazados, como cuando protegen su colmena de los intrusos, o cuando pisan o aplastan accidentalmente. Debido a que sus aguijones tienen púas, a menudo permanecen dentro de la piel, liberando más veneno y causando más dolor. Para evitar esto, no camine descalzo al aire libre y no toque las abejas vivas.</p>
                        <h2>¿Qué hacer si se presenta una picadura de abeja?</h2>
                        <p>La picadura de abeja generalmente produce una reacción local, dolor e inflamación. Si no es alérgico, su tratamiento es el siguiente: </p>
                        <li>Quitar el aguijón sin usar pinzas para evitar que se esparza el veneno.</li>
                        <li>Lavar cob agua el área afectada.</li>
                        <li>Desinfectar con un antiséptico.</li>
                        <li>Aplicar hielo o compresas frías.</li>
                        <li>Si el dolor no remite, se puede tomar un analgésico y un antihistamínico para aliviar el picor. </li>
                    </div>

                    <p></p>
                    <div>
                        <h1 class="text-center">Fuentes bibliográficas</h1>
                    </div>
                    <p>INCyTU. (Mayo de 2019). Abejas> Insectos Polinizadores. Ciudad de México, Ciudad de México, México. Obtenido de https://foroconsultivo.org.mx/INCyTU/documentos/Completa/INCYTU_19-031.pdf</p>
                    <p>MXCity. (s.f.). MXCITY GUIA INSIDER. Obtenido de 7 PASOS SENCILLOS PARA AYUDAR A SALVAR A LAS ABEJAS DE LA CDMX: https://mxcity.mx/2019/05/7-pasos-sencillos-para-ayudar-a-salvar-a-las-abejas-de-la-cdmx/</p>
                    <p>Fundación Amigos de Abejas. (2008). Fundación Amigos de Abejas. Obtenido de Abejas en Peligro: https://abejas.org/las-abejas/abejas-en-peligro/</p>
                    <p>Ciencia de Hoy. (s.f.). Ciencia de Hoy. Obtenido de Ventajas y desventajas de las abejas: https://cienciadehoy.com/ventajas-y-desventajas-de-las-abejas/</p>
                </div>
            </div>
        </div>
    </section>
    <?php include "assets/mapa.php" ?>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>