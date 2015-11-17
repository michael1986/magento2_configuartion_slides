<?php
require_once __DIR__ . '/helpers.php';

$slides = getSlides(__DIR__);

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>AngularJS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=792, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="/bower_components/shower-bright/styles/screen.css">
    <link rel="stylesheet" href="styles/angular.css">

    <script src="/bower_components/shower-core/shower.min.js"></script>
    <script src="scripts/angular.min.js"></script>

    <link rel="stylesheet" href="/assets/styles/highlight/solarized_light.min.css">
    <script src="/assets/scripts/highlight/highlight.min.js"></script>
</head>
<body class="list" data-ng-app="angulardemo">
    <header class="caption">
        <h1>AngularJS is super cool.</h1>
        <p>By Max.</p>
    </header>
    <?php
    foreach ($slides as $slideFile) {
        include $slideFile;
    }
    ?>
    <div class="progress"><div></div></div>
    <script src="/assets/scripts/shower-tweaks.js"></script>
    <script src="/assets/scripts/shower-tweaks-angular.js"></script>
    <script src="/shows/angular/scripts/angular-is-super-cool.js"></script>
</body>
</html>