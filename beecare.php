<!DOCTYPE html>
<html>
<?php
define('TITLE', 'Bee care');
?>

<head>
    <title>About - <?php echo TITLE ?></title>
    <?php include 'head.php'; ?>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta http-equiv="x-ua-compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="This sample shows how to create a custom input UI for suggesting possible results for queries against the Azure Maps Search services." />
    <meta name="keywords" content="Microsoft maps, map, gis, API, SDK, REST, search, geocoding, geocode, fuzzy, address, place, POI, points of interest, category, autosuggest, autocomplete, jquery" />
    <meta name="author" content="Microsoft Azure Maps" />

    <!-- Load JQuery UI -->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Add references to the Azure Maps Map control JavaScript and CSS files. -->
    <link rel="stylesheet" href="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.css" type="text/css" />
    <script src="https://atlas.microsoft.com/sdk/javascript/mapcontrol/2/atlas.min.js"></script>

    <script type='text/javascript'>
        var map;
        //Note that the typeahead parameter is set to true.
        var geocodeServiceUrlTemplate = 'https://{azMapsDomain}/search/{searchType}/json?typeahead=true&api-version=1&query={query}&language={language}&lon={lon}&lat={lat}&countrySet={countrySet}&view=Auto';

        function GetMap() {
            //Initialize a map instance.
            map = new atlas.Map('myMap', {
                view: 'Auto',

                //Add authentication details for connecting to Azure Maps.
                authOptions: {
                    //Use Azure Active Directory authentication.
                    authType: 'subscriptionKey',
                    subscriptionKey: 'giXFaoH8SZlfxZly3Pp8QDuI_mk2uwvDHgH5IoTa6p0',
                    getToken: function(resolve, reject, map) {
                        //URL to your authentication service that retrieves an Azure Active Directory Token.
                        var tokenServiceUrl = "https://azuremapscodesamples.azurewebsites.net/Common/TokenService.ashx";

                        fetch(tokenServiceUrl).then(r => r.text()).then(token => resolve(token));
                    }

                    //Alternatively, use an Azure Maps key. Get an Azure Maps key at https://azure.com/maps. NOTE: The primary key should be used as the key.
                    //authType: 'subscriptionKey',
                    //subscriptionKey: '<Your Azure Maps Key>'
                }
            });

            //Wait until the map resources are ready.
            map.events.add('ready', function() {
                //Create a data source to store the data in.
                datasource = new atlas.source.DataSource();
                map.sources.add(datasource);

                //Add a layer for rendering point data.
                map.layers.add(new atlas.layer.SymbolLayer(datasource));

                //Create a jQuery autocomplete UI widget.
                $("#queryTbx").autocomplete({
                    minLength: 3, //Don't ask for suggestions until atleast 3 characters have been typed. This will reduce costs by not making requests that will likely not have much relevance.
                    source: function(request, response) {
                        var center = map.getCamera().center;

                        var elm = document.getElementById('countrySelector');
                        var countryIso = elm.options[elm.selectedIndex].value;

                        //Create a URL to the Azure Maps search service to perform the search.
                        var requestUrl = geocodeServiceUrlTemplate.replace('{query}', encodeURIComponent(request.term))
                            .replace('{searchType}', document.querySelector('input[name="searchTypeGroup"]:checked').value)
                            .replace('{language}', 'en-US')
                            .replace('{lon}', center[0]) //Use a lat and lon value of the center the map to bais the results to the current map view.
                            .replace('{lat}', center[1])
                            .replace('{countrySet}', countryIso); //A comma seperated string of country codes to limit the suggestions to.

                        processRequest(requestUrl).then(data => {
                            response(data.results);
                        });
                    },
                    select: function(event, ui) {
                        //Remove any previous added data from the map.
                        datasource.clear();

                        //Create a point feature to mark the selected location.
                        datasource.add(new atlas.data.Feature(new atlas.data.Point([ui.item.position.lon, ui.item.position.lat]), ui.item));

                        //Zoom the map into the selected location.
                        map.setCamera({
                            bounds: [
                                ui.item.viewport.topLeftPoint.lon, ui.item.viewport.btmRightPoint.lat,
                                ui.item.viewport.btmRightPoint.lon, ui.item.viewport.topLeftPoint.lat
                            ],
                            padding: 30
                        });
                    }
                }).autocomplete("instance")._renderItem = function(ul, item) {
                    //Format the displayed suggestion to show the formatted suggestion string.
                    var suggestionLabel = item.address.freeformAddress;

                    if (item.poi && item.poi.name) {
                        suggestionLabel = item.poi.name + ' (' + suggestionLabel + ')';
                    }

                    return $("<li>")
                        .append("<a>" + suggestionLabel + "</a>")
                        .appendTo(ul);
                };
            });
        }

        function processRequest(url) {
            //This is a reusable function that sets the Azure Maps platform domain, sings the request, and makes use of any transformRequest set on the map.
            return new Promise((resolve, reject) => {
                //Replace the domain placeholder to ensure the same Azure Maps cloud is used throughout the app.
                url = url.replace('{azMapsDomain}', atlas.getDomain());

                //Get the authentication details from the map for use in the request.
                var requestParams = map.authentication.signRequest({
                    url: url
                });

                //Transform the request.
                var transform = map.getServiceOptions().tranformRequest;
                if (transform) {
                    requestParams = transform(request);
                }

                fetch(requestParams.url, {
                        method: 'GET',
                        mode: 'cors',
                        headers: new Headers(requestParams.headers)
                    })
                    .then(r => r.json(), e => reject(e))
                    .then(r => {
                        resolve(r);
                    }, e => reject(e));
            });
        }
    </script>
    <style>
        #queryTbx {
            width: 25em;
        }
    </style>

</head>

<body onload="GetMap()">
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
                        <p>Es una enfermedad grave de las abejas melíferas causada por una bacteria productora de esporas llamada Paenibacillus  larvae. Está presente en todo el mundo. La bacteria mata las larvas en las celdillas de cría.</p>
                    
                        <h5><strong>Loque europea</strong></h5>
                        <p>Enfermedad de las abejas melíferas causada por la bacteria Melisococcus plutonius. A pesar del nombre, se encuentra en Norteamérica, Sudamérica, Oriente Medio y Asia. Al igual que la loque americana, las bacterias de la loque europea matan las larvas dejando vacías las celdillas del panal. La enfermedad se transmite por contaminación mecánica de los panales y tiende, por tanto, a persistir año tras año. También puede ser transmitida por las abejas que sobreviven a una infección en la fase larval y diseminan las bacterias en las deyecciones.</p>
                    
                        <h5><strong>Infestación por escarabajo de las colmenas</strong></h5>
                        <p>El pequeño escarabajo de las colmenas, Aethina  tumida, es un depredador y parásito de las colonias de abejas melíferas. Es oriundo de África, pero fue introducido en los Estados Unidos, Egipto, Canadá y Australia por el movimiento comercial de abejas. Considerado como una plaga menor en su territorio original, se ha convertido en un problema importante en las zonas donde se ha introducido. Tanto los adultos como las larvas de los escarabajos se alimentan de larvas, polen, miel y cría de abejas. </p>
                    
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
                </div>
            </div>
        </div>
    </section>
    <article>
        <div style="visibility:hidden">
            Search Type:
            <input type="radio" value="address" name="searchTypeGroup" checked="checked" />
        </div>

        País:
        <select id="countrySelector">
            <option value="MX">México</option>
        </select>
        <br /><br />

        <div class="ui-widget">
            <label for="queryTbx">Buscar Lugar: </label>
            <input id="queryTbx">
        </div><br />

        <div id="myMap" style="position:relative;width:100%;min-width:290px;height:500px; left:50px;"></div>
    </article>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>