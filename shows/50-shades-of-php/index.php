<?php
require_once __DIR__ . '/../../helpers.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>50 shades of PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=792, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="/bower_components/shower-bright/styles/screen.css">
    <link rel="stylesheet" href="styles/styles.css">

    <script src="/bower_components/shower-core/shower.min.js"></script>

    <link rel="stylesheet" href="../common/solarized_light.min.css">
    <script src="../common/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
</head>
<body class="list">
    <header class="caption">
        <h1>50 shades of PHP</h1>
        <p>By Max Gopey</p>
    </header>
    <?php
    $slides = getSlides(__DIR__);
    renderSlides($slides)
    ?>
    <div class="progress"><div></div></div>
    <script src="/scripts/shower-tweaks.js"></script>
</body>
</html>