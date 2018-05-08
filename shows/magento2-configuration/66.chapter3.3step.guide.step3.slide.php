<section class="slide" id="<?= getSlideId(__FILE__) ?>" xmlns="http://www.w3.org/1999/html">
    <div>
        <p>Step 3: Create a method for getting config by XPath fetched as a parameter</p>

        <span class="fs-60">

<?= code('php','
namespace Test\ModuleA\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_scopeConfig;
    
    ...
    
    public function getConfig($xPath)
    {
        return $this->_scopeConfig->getValue(
            $xPath,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}')
?>
        </span>

    </div>
</section>