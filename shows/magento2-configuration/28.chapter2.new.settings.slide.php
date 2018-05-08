<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p class="title">
            New settings in environmental configuration
        </p>

        Magento mode
        <span class="fs-80">
            
        <?=code('php','
return array(
    ...
    \'MAGE_MODE\' => \'default\', // or \'developer\', \'production\'
    ...
);
') ?>
        </span>
        
        
    </div>
</section>