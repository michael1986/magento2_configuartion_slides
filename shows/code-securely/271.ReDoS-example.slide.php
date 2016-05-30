<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>Regular expression DoS</h2>

        <div class="pull-left col-1-2">
            <?php echo code('', '^(a+)+$') ?>
        </div>
        <div class="pull-left col-1-2">
            <img src="images/redos-nfa.png" alt=""/>
        </div>
        <br class="clear"/>
        <ul>
            <li>Input: 'aaaaX' — 16 possible paths</li>
            <li>Input: 'aaaaaaaaaaaaaaaaX' — 65536 possible paths</li>
            <li>The number is double for each additional a.</li>
        </ul>

    </div>
</section>