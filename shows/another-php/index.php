<?php
require_once __DIR__ . '/../../helpers.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <base href="<?php echo getBaseHref(__DIR__) ?>">
    <title>Another PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=792, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="/bower_components/shower-bright/styles/screen.css">
    <link rel="stylesheet" href="styles/agate.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/print.css" media="print">

    <script src="/bower_components/shower-core/shower.min.js"></script>
    <script src="/assets/scripts/highlight/highlight.min.js"></script>
    <script>
        hljs.initHighlightingOnLoad();
    </script>
</head>
<body class="list">
    <header class="caption">
        <h1>Another PHP</h1>
        <p>By Max Gopey</p>
    </header>
    <?php
    $slides = getSlides(__DIR__);
    renderSlides($slides)
    ?>
    <div class="progress"><div></div></div>
    <script src="/assets/scripts/shower-tweaks.js"></script>
</body>
</html>