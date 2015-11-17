<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <?=code('php', '
$a <=> $b;
// instead of:
($a < $b) ? -1 : (($a > $b) ? 1 : 0);
        ') ?>
    </div>
</section>