<section class="slide" id="<?= getSlideId(__FILE__) ?>" xmlns="http://www.w3.org/1999/html">
    <div>

        <div>
            <span class="directory">module.xml</span> - main module configuration
        </div>
        <div style="text-align: right">
            and required for starting a module
        </div>
        <br>

        Code example
        <span class="fs-60">
<?= code('xml','
<?xml version="1.0"?>
<config ... xsi:noNamespaceSchemaLocation="urn:magento:framework:Module/etc/module.xsd">
    <module name="Test_ModuleA" setup_version="1.0.0">
        <sequence>
            <module name="Test_ModuleB"/>
            <module name="Test_ModuleC"/>
            <module name="Test_ModuleD"/>
        </sequence>
    </module>
</config>');
?>
        </span>
        <span class="small annotation">
            * <strong>&lt;sequence&gt;</strong> declares the list of components that must be loaded before the current component is loaded
        </span>

    </div>
</section>