<section class="slide" id="<?= getSlideId(__FILE__) ?>" xmlns="http://www.w3.org/1999/html">
    <div>

        <div>
            <span class="directory">config.xml</span> - system configuration default values
        </div>
        <br>
        Code example
        <span class="fs-60">
<?= code('xml','
<?xml version="1.0"?>
<config ... xsi:noNamespaceSchemaLocation="urn:magento:module:Magento_Store:etc/config.xsd">
    <default>
        <my_section>
            <my_group>
                <my_value>1</my_value>
            </my_group>
            <my_group2>
                <my_value1>Hello world!</my_value1>
                <my_value2>Lorem Ipsum</my_value2>
                <my_value3>...</my_value3>
            </my_group2>
        </my_section>
    </default>
</config>
');
?>
        </span>
    </div>
</section>