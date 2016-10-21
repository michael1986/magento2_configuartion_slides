<section class="slide full-page " id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?php
        echo code('php', '
class Cgi_Nda_Block_Order_Mode_Info
{
    private $orderMode;
    
    public function __construct(
        Cgi_Nda_Model_Order_Mode_Interface $orderMode
    ) {
        $this->orderMode = $orderMode;
    }
    
    public function getOrderModeTitle() {
        return $this->orderMode->getTitle();
    }
    
    public function isSeparateShippingAddressAllowed() {
        return $this->orderMode->isSeparateShippingAddressAllowed();
    }
}
        ', true, 'fs-80') ?>
    </div>
</section>