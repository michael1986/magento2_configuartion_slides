<?php

require 'shows/another-php/src/InputStream.php';

function writer(InputStream $stream) {
    $stream->write('Message 1');
    $stream->write('Message 2');
    yield '2 messages written';
    $stream->write('Message 3');
    $stream->write('Message 4');
    yield '2 messages written';
    $stream->write('Message 5');
    $stream->write('Message 6');
    yield '2 messages written';
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

$stream = new InputStream();
$queue[] = writer($stream);
$queue[] = reader($stream);

while (true) {
    $continue = array_reduce($queue, function($result, Iterator $queueItem) {
        if ($valid = $queueItem->valid()) {
            echo $queueItem->current() . PHP_EOL;
            $queueItem->next();
        }
        return $result || $valid;
    }, false);
    if (!$continue) {
        break;
    }
}
