<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <br/>
        <?php
        echo code('php', '
interface Cgi_Nda_Model_Order_Mode_Interface
{
    public function getCode() : int;
    
    public function getTitle() : string;
    
    public function isSeparateShippingAddressAllowed() : bool;
}
        ', true, 'fs-80') ?>
    </div>
</section>