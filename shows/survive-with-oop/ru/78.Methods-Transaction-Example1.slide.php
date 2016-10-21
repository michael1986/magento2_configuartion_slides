<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?php echo code('php', '
class Product {
    public function reduceQuantity($deltaQuantity) {
        $this->quantity -= $deltaQuantity;
    }
    public function verifyStockAvailability() {
        if ($this->quantity == 0) {
            $this->removeFromStock();
        }
    }
}

$product->reduceQuantity($orderedQuantity);
$product->verifyStockAvailability();
', true, 'fs-80'); ?>
    </div>
</section>