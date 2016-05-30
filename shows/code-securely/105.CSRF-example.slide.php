<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 2</span>
        <h2>Cross-Site Request Forgery (CSRF)</h2>

            <?php echo code('html', '
<img src="http://shop.com/delete.php?product_id=156"/>
        ') ?>
    </div>
</section>