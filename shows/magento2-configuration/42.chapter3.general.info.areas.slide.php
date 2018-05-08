<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p class="small">
            Module (and other component types) configuration files are loaded from Global stage: <br>
            <span class="directory"><?php echo htmlspecialchars('<your component>/etc/*.xml') ?></span></li>
        </p>

        However, they can be divided into following areas:
        <ol class="small">
            <li><strong>adminhtml</strong> – configuration will be applied for admin panel</li>
            <li><strong>frontend</strong> – configuration will be applied for storefront</li>
            <li><strong>webapi_rest</strong> – configuration will be applied when Magento is used as a REST application</li>
            <li><strong>webapi_soap</strong> – configuration will be applied on SOAP calls</li>
            <li><strong>crontab</strong> – configuration will be applied for the CRON actions</li>
        </ol>
    </div>
</section>