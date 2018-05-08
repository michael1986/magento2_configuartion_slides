<section class="slide" id="<?= getSlideId(__FILE__) ?>" xmlns="http://www.w3.org/1999/html">
    <div>

        <div>
            <span class="directory">events.xml</span> - event / observer configuration
        </div>
        <br>
        Code example
        <span class="fs-60">
<?= code('xml','
<?xml version="1.0"?>
<config ... xsi:noNamespaceSchemaLocation="urn:magento:framework:Event/etc/events.xsd">
    <event name="controller_action_predispatch">
        <observer name="demo" instance="Test\ModuleA\Observer\Demo" />
        <observer name="demo2" instance="Test\ModuleA\Observer\Demo2" />
    </event>
</config>
');
?>
        </span>
        <span class="small annotation">
            * There is no method property, each Observer implements execute() method
        </span>
    </div>
</section>