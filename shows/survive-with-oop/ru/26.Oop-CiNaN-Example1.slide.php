<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p class="">Пожалуйста, не делайте так:</p>
        <?php echo code('php', '
use Spatie\Regex\Regex;

// Using `match`
Regex::match(\'/a/\', \'abc\'); // `MatchResult` object
Regex::match(\'/a/\', \'abc\')->hasMatch(); // true
Regex::match(\'/a/\', \'abc\')->result(); // \'a\'
'); ?>
    </div>
</section>