<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
$regExp = $builder
    ->startOfInput()
    ->exactly(4)->digits()
    ->then("_")
    ->exactly(2)->digits()
    ->then("_")
    ->min(3)->max(10)->letters()
    ->then(".")
    ->anyOf(array("png", "jpg", "gif"))
    ->endOfInput()
    ->getRegExp();

//true
$regExp->matches("2020_10_hund.jpg");
$regExp->matches("2030_11_katze.png");
$regExp->matches("4000_99_maus.gif");

//false
$regExp->matches("123_00_nein.gif");
$regExp->matches("4000_0_nein.pdf");
$regExp->matches("201505_nein.jpg");
        ', false) ?>
        </pre>
    </div>
</section>