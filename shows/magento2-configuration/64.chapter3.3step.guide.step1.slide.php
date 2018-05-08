<section class="slide" id="<?= getSlideId(__FILE__) ?>" xmlns="http://www.w3.org/1999/html">
    <div>
        <p>Step 1: Create a helper</p>

        <span class="fs-65">

<?= code('php','
namespace Test\ModuleA\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

}')
?>
        </span>

</div>
</section>