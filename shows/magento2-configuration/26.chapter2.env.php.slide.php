<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p>
            <span class="directory">&lt;base dir&gt;/app/etc/env.php</span> - environmental configuration
        </p>

        Code example (and the answer - how to setup DB)
        <span class="fs-50">
            
        <?=code('php','
return array(
    ...
    \'session\' => array (
        \'save\' => \'files\',
    ),
    \'db\' => array(
        \'table_prefix\' => \'\',
        \'connection\' => array(
            \'default\' => array(
                \'host\' => \'localhost\',
                \'dbname\' => \'magento2\',
                \'username\' => \'root\',
                \'password\' => \'\',
                \'active\' => \'1\',
            ),
        ),
    )
    ...
);') ?>
        </span>
    </div>
</section>