<?php

const SOURCE_DIR = __DIR__ . '/' . 'shows';
const SOURCE_FILE = 'index.php';
const DESTINATION_FILE = 'index.html';


function getShowName($argv)
{
    if (!isset($argv[1])) {
        throw new Exception("Usage: php compile.php <show-name>");
    }
    return $argv[1];
}

function getShowPath($show)
{
    return SOURCE_DIR . '/' . $show;
}

function compile($showPath)
{
    $sourcePath = $showPath . '/' . SOURCE_FILE;
    if (is_file($sourcePath)) {
        ob_start();
        include $sourcePath;
        $result = ob_get_clean();
        return $result;
    } else {
        throw new Exception("Source path $sourcePath is not readable.");
    }
}

function writeResult($showPath, $result)
{
    $destinationPath = $showPath . '/' . DESTINATION_FILE;
    if (is_writable($showPath)) {
        file_put_contents($destinationPath, $result);
    } else {
        throw new Exception("Destination path $destinationPath is not writable.");
    }
}

try {
    $showPath = getShowPath(getShowName($argv));
    $result = compile($showPath);
    writeResult($showPath, $result);
    exit("Show compiled successfully to $showPath.\n");
} catch (Exception $e) {
    fwrite(STDERR, $e->getMessage() . "\n");
    exit(1);
}
