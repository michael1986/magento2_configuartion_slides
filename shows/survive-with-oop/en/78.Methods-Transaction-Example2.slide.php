<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?php echo code('php', '
class Product {
    private function reduceQuantity($deltaQuantity) { /*...*/ }
    private function verifyStockAvailability() { /*...*/ }

    public function takeFromStock($quantity) {
        try {
            $this->reduceQuantity($orderedQuantity);
            $this->verifyStockAvailability();
        } catch() {
            // ...
        }
    }
}

$product->takeFromStock($orderedQuantity);
', true, 'fs-80'); ?>
    </div>
</section>