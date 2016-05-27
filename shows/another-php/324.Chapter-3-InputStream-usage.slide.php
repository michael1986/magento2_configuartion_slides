<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-50 pull-left col-1-2">
        <?php echo code('php', '
function writer(InputStream $stream) {
    $stream->write(\'Message 1\');
    $stream->write(\'Message 2\');
    yield \'2 messages written\';
    $stream->write(\'Message 3\');
    $stream->write(\'Message 4\');
    yield \'2 messages written\';
    $stream->write(\'Message 5\');
    $stream->write(\'Message 6\');
    yield \'2 messages written\';
}

function reader(InputStream $stream) {
    foreach ($stream as $line) {
        if (strlen($line)) {
            yield $line;
        } else {
            $stream->close();
        }
    }
}
        ', false) ?>
        </pre>

        <pre class="code fs-50 pull-left col-1-2">
        <?php echo code('php', '
$stream = new InputStream();
$queue[] = writer($stream);
$queue[] = reader($stream);

while (true) {
    $continue = array_reduce(
        $queue,
        function($result, Iterator $queueItem) {
            if ($valid = $queueItem->valid()) {
                echo $queueItem->current(), "\n";
                $queueItem->next();
            }
            return $result || $valid;
        },
        false);
    if (!$continue) {
        break;
    }
}
        ', false) ?>
        </pre>
<!--        <br class="clear"/>-->
        <pre class="real-pre fs-50 pull-left">
2 messages written
Message 1
2 messages written
Message 2
2 messages written
Message 3
Message 4
Message 5
Message 6

        </pre>
    </div>
</section>