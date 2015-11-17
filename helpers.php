<?php

function code($lang, $code, $addPre = true) {
    $lines = explode("\n", $code);
    if (!strlen($lines[0])) {
        array_shift($lines);
    }
    if (!strlen(trim($lines[count($lines) - 1]))) {
        array_pop($lines);
    }
    $lines = array_map(function($line) {
        if (!strlen($line)) {
            return '&nbsp;';
        }
        return htmlentities($line);
    }, $lines);
    $code = '<code class="' . $lang . '">'
        . implode("</code>\n<code class=\"" . $lang . "\">", $lines)
        . '</code>';

    return $addPre ? '<pre class="code">' . $code . '</pre>' : $code;
}

/**
 * @return array
 */
function getSlides($root)
{
    $slides = glob($root . '/*.slide.php');
    natsort($slides);
    return $slides;
}

function renderSlides($slides)
{
    foreach ($slides as $slideFile) {
        echo PHP_EOL;
        include $slideFile;
        echo PHP_EOL;
    }
}

function getSlideId($filename)
{
    return preg_replace('/.*\/[\d-]+\.(.+)\.slide\.php$/', '$1', $filename);
}