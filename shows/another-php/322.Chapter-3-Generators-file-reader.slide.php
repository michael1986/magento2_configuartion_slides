<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-80">
        <?php echo code('php', '
function readFileLines($path) {
    $handle = fopen($path, \'r\');
    while ($line = fgets($handle)) {
        yield $line;
    }
    fclose($handle);
}

$lines = readFileLines(__FILE__);
foreach($lines as $line) {
    echo $line;
};
        ', false) ?>
        </pre>
    </div>
</section>