<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?=code('php', '
<?php
(function(array $a) {
    var_dump($a);
})(15);
// Fatal error: Uncaught TypeError:
//    Argument 1 passed to {closure}()
//    must be of the type array, integer given ...
        '); ?>
    </div>
</section>