<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p class="">Вместо:</p>
        <?php echo code('php', '
Assertion::nullOrMax(null, 42); // success
Assertion::nullOrMax(1, 42);    // success
Assertion::nullOrMax(1337, 42); // exception
', true, 'fs-80'); ?>

        <p class="">лучше:</p>
        <?php echo code('php', '
// since PHP 5.6
Assertion\nullOrMax(null, 42); // success
Assertion\nullOrMax(1, 42);    // success
Assertion\nullOrMax(1337, 42); // exception
', true, 'fs-80'); ?>
    </div>
</section>