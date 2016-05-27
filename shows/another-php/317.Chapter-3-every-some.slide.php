<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
function some($array, $callback) {
    foreach ($array as $item) {
        if ($callback($item)) {
            return true;
        }
    }
    return false;
}
function every($array, $callback) {
    return !some($array, function($item) use ($callback) {
        return !$callback($item);
    });
}
var_dump(every([1, 2, 3], function ($item) {return $item > 0;}));
var_dump(every([1, -2, 3], function ($item) {return $item > 0;}));
        ', false) ?>
        </pre>
        <pre class="code fs-80">
        <?php echo code('php', '
bool(true)
bool(false)
        ', false) ?>
        </pre>
    </div>
</section>