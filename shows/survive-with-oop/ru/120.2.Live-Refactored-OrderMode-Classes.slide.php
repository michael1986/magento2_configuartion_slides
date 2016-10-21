<section class="slide full-page" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <?php
        echo code('php', '
class Cgi_Nda_Model_Order_Mode_Clinic implements Cgi_Nda_Model_Order_Mode_Interface
{
    public function getCode() : int {
        return 1;
    }
    public function getTitle() : string {
        return \'For Clinic\';
    }
    public function isSeparateShippingAddressAllowed() : bool {
        return false;
    }
}

class Cgi_Nda_Model_Order_Mode_PetOwner implements Cgi_Nda_Model_Order_Mode_Interface
{
    public function getCode() : int {
        return 2;
    }
    public function getTitle() : string {
        return \'For Pet Owner\';
    }
    public function isSeparateShippingAddressAllowed() : bool {
        return true;
    }
}
        ', true, 'fs-60') ?>
    </div>
</section>