<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <?php
        echo code('php', '
class Cgi_Nda_Model_Session
{
    public function getOrderMode() 
        : Cgi_Nda_Model_Order_Mode_Interface {
        return $this->getSessionValue(\'order_mode\');
    }
}
        ') ?>
    </div>
</section>