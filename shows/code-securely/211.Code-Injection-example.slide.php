<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>Code Injection</h2>

        <?php echo code('php', '
$myvar = "varname";
$x = $_GET[\'arg\'];
eval("\$myvar = \$x;");
') ?>
        <p class="next"><strong>eval = evil</strong></p>
    </div>
</section>