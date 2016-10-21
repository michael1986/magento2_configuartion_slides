<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <br/>
        <?php echo code('php', '
function getProductUrl($product) {
    return \'/\' 
        . str_replace(\' \', \'-\', strtolower($product));
}
'); ?>
    </div>
</section>