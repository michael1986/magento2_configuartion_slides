<section class="slide" id="<?= getSlideId(__FILE__) ?>" xmlns="http://www.w3.org/1999/html">
    <div>
        <p>Step 2: Create a constructor with Configuration Object injected as a dependency</p>

        <span class="fs-60">

<?= code('php','
namespace Test\ModuleA\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_scopeConfig;
    
    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
        
        parent::__construct($context);
    }

}')
?>
        </span>

    </div>
</section>