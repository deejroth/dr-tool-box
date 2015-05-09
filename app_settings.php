<?php

/**
 * Adds extra debug information to PHP's output
 */
$debug_mode = false;
if ($debug_mode === true) {
    // show superglobal information
    echo xdebug_dump_superglobals();
}

/**
 * Turns on Composer's autoloading
 */
$composer = true;
if ($composer === true) {
    require __DS__ . 'vendor/autoload.php';
}