<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?=code('php', '
<?php
(function(string $a) {
    var_dump($a);
})(15);
// string(2) "15"
        '); ?>
    </div>
</section>