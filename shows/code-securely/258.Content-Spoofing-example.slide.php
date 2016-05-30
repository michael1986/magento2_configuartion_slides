<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Content Spoofing</span>
        <div class="small">
        <?php echo code('php', '
<?php
    $name = $_REQUEST [\'name\'];
?>
<html>
    <h1>Welcome to the Internet!</h1>
    <br>
    <body>
        Hello, <?php echo $name; ?>!
        <p>We are so glad you are here!</p>
    </body>
</html>
        ') ?>
        </div>
    </div>
</section>