<?php

const ROOT = __DIR__;

/**
 * Render code ready for highlighting.
 *
 * @param string    $lang        Language for highlighting.
 * @param string    $code        Code itself.
 * @param bool|true $wrapWithPre Wrap code with <pre> tag?
 * @param string    $preClasses  Additional <pre> classes.
 *
 * @return string
 */
function code($lang, $code, $wrapWithPre = true, $preClasses = '') {
    $lines = explode("\n", $code);
    if (!strlen(trim($lines[0]))) {
        array_shift($lines);
    }
    if (!strlen(trim($lines[count($lines) - 1]))) {
        array_pop($lines);
    }

    $code = implode('', array_map(function($line) use ($lang) {
        $escapedLine = strlen($line) ? htmlentities($line) : '&nbsp;';
        return sprintf('<code class="%s">%s</code>', $lang, $escapedLine);
    }, $lines));

    return $wrapWithPre ? '<pre class="code ' . $preClasses . '">' . $code . '</pre>' : $code;
}


/**
 * Get list of slides full paths.
 *
 * @param string        $root           Path to slides root dir.
 * @param callable|null $filterCallback Function to filter the list of slides.
 *
 * @return array
 */
function getSlides($root, callable $filterCallback = null) {
    $slides = glob($root . '/*.slide.php');
    if ($filterCallback !== null) {
        $slides = array_filter($slides, $filterCallback);
    }
    natsort($slides);
    return $slides;
}

/**
 * Check if slide name is in provided list.
 *
 * @param string $slide
 * @param array $list
 *
 * @return bool
 */
function slideInList($slide, $list) {
    return array_reduce($list, function($result, $listItem) use ($slide) {
        return $result || strpos(basename($slide), (string) $listItem) === 0;
    }, false);
}

/**
 * Get slides filter based on exclude list.
 *
 * @param array $excludeList
 *
 * @return Closure
 */
function excludeSlides($excludeList) {
    return function($item) use ($excludeList) {
        return !slideInList($item, $excludeList);
    };
}

/**
 * Get slides filter based on include list.
 *
 * @param array $includeList
 *
 * @return Closure
 */
function includeSlides($includeList) {
    return function($item) use ($includeList) {
        return slideInList($item, $includeList);
    };
}

/**
 * Output slides.
 *
 * @param array $slides Slides paths.
 */
function renderSlides($slides) {
    foreach ($slides as $slideFile) {
        echo PHP_EOL;
        include $slideFile;
        echo PHP_EOL;
    }
}

/**
 * Get slide ID from slide name.
 *
 * @param $filename
 *
 * @return mixed
 */
function getSlideId($filename) {
    return preg_replace('/.*\/[\d-]+\.(.+)\.slide\.php$/', '$1', $filename);
}

/**
 * Get href attribute value for <base> tag.
 *
 * @param string $pathToShow
 *
 * @return string
 */
function getBaseHref($pathToShow) {
    return str_replace(ROOT, '', $pathToShow) . '/';
}