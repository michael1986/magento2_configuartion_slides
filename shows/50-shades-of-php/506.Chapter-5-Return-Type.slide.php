<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?=code('php', '
<?php
$a = (function(string $a) : int {
    return $a; // string
})(15);
var_dump($a); // int(15)
        '); ?>
    </div>
</section>