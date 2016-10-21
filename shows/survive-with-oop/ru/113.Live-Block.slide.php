<section class="slide full-page" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?php
        echo code('php', '
class Cgi_Nda_Block_Order_Mode_Info
{
    public function getOrderMode() {
        $orderMode = $this->_getSession()->getOrderMode();
        if ($orderMode) {
            if ($orderMode == Cgi_Nda_Model_Order_Mode::ORDER_MODE_PET_OWNER) {
                return \'For pet owner\';
            } elseif ($orderMode == Cgi_Nda_Model_Order_Mode::ORDER_MODE_CLINIC) {
                return \'For clinic\';
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    public function isSeparateShippingAddressAllowed()
    {
        $orderMode = $this->_getSession()->getOrderMode();
        return $orderMode && 
            $orderMode == Cgi_Nda_Model_Order_Mode::ORDER_MODE_PET_OWNER
    }
}
        ', true, 'fs-65') ?>
    </div>
</section>