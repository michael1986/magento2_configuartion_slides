<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <?php echo code('php', '
class SearchEngine {
    public function indexProduct(Product $product) {
        $addToIndex = $product->isVisible();
        if ($addToIndex) {
            $this->productIndex->add($product);
        }
    }
}
'); ?>
    </div>
</section>