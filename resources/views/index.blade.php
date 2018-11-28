<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-129282485-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-129282485-1');
        </script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Washington Parks Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body, #viewDiv {
                padding: 0;
                margin: 0;
                height: 100%;
                width: 100%;
                overflow: hidden;
            }
            #announcement {
                background-color: #6B9080;
            }
            h1 {
                margin: 0 1em;
                color: #fff;
                font-family: sans-serif;
                font-size: 1em;
                padding: .5em 0;
            }
        </style>
        <link rel="stylesheet" href="https://js.arcgis.com/4.9/esri/css/main.css">

        <!-- Scripts -->
        <script src="https://js.arcgis.com/4.9/"></script>
        <script>
require([
      "esri/Map",
      "esri/views/SceneView",
      "esri/layers/Layer"
    ], function(
      Map, SceneView, Layer
    ) {

      var map = new Map({
        basemap: "topo"
      });

      var view = new SceneView({
        map: map,
        container: "viewDiv",
        zoom: 8.5,
        center: [-120.740135, 47.3]
      });

      /************************************************
       *
       * Create a layer from an existing Portal item hosted
       * in ArcGIS Online using the ID of the item.
       *
       *************************************************/

      // WA State Mask
      Layer.fromPortalItem({
         portalItem: {
          id: "c72872a686d54a0fb903089121b8df11"
         }
      }).then(addLayer)
      .catch(rejection);
      
      // Washington State Park boundaries
      Layer.fromPortalItem({
          portalItem: { // autocasts as new PortalItem()
            id: "3385b003af5248e59c1fa68e1411c446"
          }
        }).then(addLayer)
        .catch(rejection);

      // Park trails
      Layer.fromPortalItem({
        portalItem: {
            id: "58ced29d87764b00ba8f4fa37be592aa"
        }
      }).then(addLayer)
      .catch(rejection);

      // Adds the layer to the map once it loads
      function addLayer(layer) {
        map.add(layer);
      }

      function rejection(error) {
        console.log("Layer failed to load: ", error);
      }
    });

        </script>

    </head>
    <body>

        <div id="announcement">
            <h1>Washington Parks Project</h1>
        </div>

        <div id="map"></div>

    </body>
</html>
