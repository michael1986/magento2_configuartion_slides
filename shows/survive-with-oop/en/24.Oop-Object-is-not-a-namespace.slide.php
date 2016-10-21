<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <br/>
        <h2 class="center">Object is not a namespace</h2>
        <div class="next">
        <p class="">Please, don't use it this way:</p>
<?php echo code('php', '
Regex::match(\'/a/\', \'abc\'); // `MatchResult` object
Regex::matchAll(\'/a/\', \'abcabc\')->hasMatch();
Regex::replace(\'/a/\', \'b\', \'abc\')->result();
', true, 'small'); ?>
        </div>
    </div>
</section>