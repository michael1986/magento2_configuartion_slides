<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Cross-site Scripting (XSS)</span>

        <div class="small">
            <?php echo code('html', 'http://www.some.site/page.html?default=French') ?>
            <?php echo code('html', '
Select your language:
<select><script>
document.write("<OPTION value=1>"+document.location.href.substring(
    document.location.href.indexOf("default=")+8)+"</OPTION>");
document.write("<OPTION value=2>English</OPTION>");
</script></select>
            ') ?>

        <?php echo code('html', 'http://www.some.site/page.html?default=<script>alert(document.cookie)</script>') ?>
        </div>
    </div>
</section>