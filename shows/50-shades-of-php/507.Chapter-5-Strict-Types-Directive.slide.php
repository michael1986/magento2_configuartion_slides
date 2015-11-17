<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?=code('php', '
<?php
declare(strict_types=1); // must be the first line

(function(string $a) {
    var_dump($a);
})(15);
// Fatal error: Uncaught TypeError:
//    Argument 1 passed to {closure}()
//    must be of the type string, integer given ...
        '); ?>
    </div>
</section>