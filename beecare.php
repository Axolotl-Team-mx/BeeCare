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