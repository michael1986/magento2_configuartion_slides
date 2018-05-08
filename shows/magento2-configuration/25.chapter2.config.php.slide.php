<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p>
            <span class="directory">&lt;base dir&gt;/app/etc/config.php</span> - list of installed modules
        </p>
        
        Code example
        <span class="fs-65">
            
        <?=code('php','
return array (
    \'modules\' => 
        array (
            \'Magento_Store\' => 1,
            \'Magento_AdvancedPricingImportExport\' => 1,
            \'Magento_Directory\' => 1,
            \'Magento_Theme\' => 1,
            \'Magento_Backend\' => 1,
            \'Magento_Backup\' => 1,
            \'Magento_Eav\' => 1,
            \'Magento_Customer\' => 1
            ...
        )
);') ?>
        </span>
    </div>
</section>