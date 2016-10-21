<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p>Вместо:</p>
        <?php echo code('php', '
Regex::match(\'/a/\', \'abc\'); // `MatchResult` object
Regex::match(\'/a/\', \'abc\')->hasMatch(); // true
Regex::match(\'/a/\', \'abc\')->result(); // \'a\'
', true, 'fs-80'); ?>
        <p>лучше:</p>
        <?php echo code('php', '
$pattern = new Regex(\'/a/\');
$matchingResult = $pattern->match(\'abc\'); // `MatchResult` object
$matchingResult->hasMatch(); // true
$matchingResult->result(); // \'a\'
', true, 'fs-80'); ?>
    </div>
</section>