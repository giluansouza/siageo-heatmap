<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->e($title)?></title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/leaflet.css" rel="stylesheet"> -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <style>
        /*
        * Always set the map height explicitly to define the size of the div element
        * that contains the map.
        */
        #map {
            height: 100%;
        }

        /*
        * Optional: Makes the sample page fill the window.
        */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .maparea {
            display: block;
            width: 100%;
            height: 100%;
            min-height: 600px;
            background: #58B;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Heatmap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/google-maps">Google Maps</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/osm">OSM</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container">
            <?= $this->section("content"); ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-body-tertiary">
        <div class="container">
            <span class="text-body-secondary">2023 &copy Giluan Souza</span>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <?= $this->section("scripts"); ?>
</body>
</html>
