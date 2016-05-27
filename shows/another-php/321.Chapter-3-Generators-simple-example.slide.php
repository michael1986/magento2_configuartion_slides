<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-80">
        <?php echo code('php', '
function garbageGenerator() {
    $n = rand(1, 10);
    while ($n--) {
        yield md5(rand());
    }
}
$garbage = garbageGenerator();
foreach ($garbage as $trash) {
    echo $trash, PHP_EOL;
}
        ', false) ?>
        </pre>
        <pre class="real-pre fs-80">
6e620c902c7088ace3ebf6c96f5dedd5
1340dcc6f3e0e39b4c48f480f5a92d52
c264962d537032be6c3a8a94eda811d4
0bfa2efb3909c105473a4fcaa71b697b
        </pre>
    </div>
</section>