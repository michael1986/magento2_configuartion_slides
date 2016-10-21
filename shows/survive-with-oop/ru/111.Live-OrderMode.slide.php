<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <?php echo code('php', '
class Cgi_Nda_Model_Order_Mode
{
    const ORDER_MODE_CLINIC = 1;
    const ORDER_MODE_PET_OWNER = 2;
}
        ') ?>
    </div>
</section>