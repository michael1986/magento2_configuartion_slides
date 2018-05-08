<section class="slide" id="<?= getSlideId(__FILE__) ?>" xmlns="http://www.w3.org/1999/html">
    <div>

        <div>
            <span class="directory">routes.xml</span> - route configuration
        </div>
        <br>

        Code example
        <span class="fs-60">
<?= code('xml','
<?xml version="1.0"?>
<config ... xsi:noNamespaceSchemaLocation="urn:magento:framework:App/etc/routes.xsd">
    <router id="standard">
        <route id="helloworld" frontName="helloworld">
            <module name="Test_ModuleA" />
        </route>
    </router>
</config>');
?>
        </span>
        <span class="small annotation">
            * There is no method property, each Controller implements execute() method
        </span>

    </div>
</section>