<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p class="title">
            New settings in environmental configuration
        </p>

        Cache management
        <span class="fs-50">
        <?=code('php','
return array(
    ...
    \'cache_types\' => 
        array(
            \'config\' => 1,
            \'layout\' => 1,
            \'block_html\' => 1,
            \'collections\' => 1,
            \'reflection\' => 1,
            \'db_ddl\' => 1,
            \'eav\' => 1,
            \'customer_notification\' => 1,
            \'full_page\' => 1,
            \'config_integration\' => 1,
            \'config_integration_api\' => 1,
            \'translate\' => 1,
            \'config_webservice\' => 1,
        ),
    ...
);
') ?>
        </span>
    </div>
</section>
