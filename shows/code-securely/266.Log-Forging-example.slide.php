<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>Log Forging</h2>

        <div class="fs-65">
            <?php echo code('php', '
$productId = Mage::app()->getRequest()->getParam(\'id\');
try {
    $product->load($productId);
} catch (Mage_Exception $exception) {
    Mage::log(\'Failed to load product with ID = \' + $productId);
}
', true, 'no-margin-bottom'); ?>
            <pre class="code no-margin-bottom next"><code class="html"
                 style="white-space:normal">http://magento.site/index.php?id=5\n2016-04-19T15:13:24+00:00 ERR (3): Payment was successful for order #100000156, but Magento was not able to complete the order.</code></pre>
        </div>
        <p class="small next">— Hello! I just payed 500$ for a laptop, order # is 100000156, my credit card was charged, but the site showed an error. Could you maybe check your log files?</p>
    </div>
</section>