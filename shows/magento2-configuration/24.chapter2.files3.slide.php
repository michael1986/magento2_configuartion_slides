<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p>
            Deployment Configuration is located only in Primary stage: <br>
            <span class="directory">&lt;base dir&gt;/app/etc/</span>
        </p>
        
        And consists of 2 PHP files:
        
        <ol>
            <li><span class="directory">config.php</span> - list of installed modules</li>
            <li><span class="directory">env.php</span> - environmental configuration</li>
        </ol>

        <span class="annotation">* which returns multi-dimensional associative array</span> <br>
        <span class="annotation small">** The Magento 2 Deployment Configuration replaces <b>local.xml</b> in Magento 1.x.</span>
    </div>
</section>