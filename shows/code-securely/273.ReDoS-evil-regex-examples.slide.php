<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <span class="chapter">Chapter 3</span>
        <h2>ReDoS: Evil Regexes</h2>

        <div class="small">
            <?php echo code('html', '(a+)+', true, 'no-margin-bottom') ?>
            <?php echo code('html', '([a-zA-Z]+)*', true, 'no-margin-bottom') ?>
            <?php echo code('html', '(a|aa)+', true, 'no-margin-bottom') ?>
            <?php echo code('html', '(a|a?)+', true, 'no-margin-bottom') ?>
            <?php echo code('html', '(.*a){x} // for x > 10', true, 'no-margin-bottom') ?>
            <p>All the above are susceptible to the input <strong>aaaaaaaaaaaaaaaaaaaaaaaa!</strong></p>
        </div>
    </div>
</section>