<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <br/>
        <?php echo code('php', '
class SearchEngine {
    public function indexProduct(Product $product) {
        $this->productIndex->add($product);
        $indexIsUpToDate = $this->productIndex->isUpToDate();
        //.. 
    }
}
', true, 'fs-80'); ?>
    </div>
</section>