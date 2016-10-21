<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <br/>
        <?php echo code('php', '
$cat = new Cat();
$cat->dropContainer(new Glass());
$cat->dropContainer(new Cup());
$cat->runAway();
'); ?>
    </div>
</section>