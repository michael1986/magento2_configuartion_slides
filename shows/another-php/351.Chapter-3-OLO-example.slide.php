<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
if (anyOf([1, 3, 5])->is(5)) {
    // do something
}
if (anyOf([$name, $surname])->matches(\'/^\w+$/\') {
    // do something
}
if (allOf([1, 3, 5])->areNot(6)) {
    // do something
}
if (either($condition1)->or($condition2)) {
    // do something
}
if (neither($x)->nor($y)) {
    // do something
}
if (the($x)->isNeither(5)->nor(10)) {
    // do something
}
if (the($x)->isGreaterThan(5)->butLessThan(10)) {
    // do something
}
        ', false) ?>
        </pre>
    </div>
</section>