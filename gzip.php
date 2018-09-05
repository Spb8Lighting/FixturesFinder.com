<?php
if (isset($_SERVER['SCRIPT_FILENAME'])) {
    $timestamp = filemtime(__FILE__);
    header('Last-Modified: ' . $timestamp);
    $expires = 60;
    header("Pragma: public");
    header("Cache-Control: maxage=" . $expires);
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $expires) . ' GMT');
    header('Vary: Accept-Encoding');
    $pathinfo = pathinfo($_SERVER['SCRIPT_FILENAME']);
    $extension = $pathinfo['extension'];
    if ($extension == 'css') {
        header('Content-type: text/css');
    }
    if ($extension == 'js') {
        header('Content-type: text/javascript');
    }
}
