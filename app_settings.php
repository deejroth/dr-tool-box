<?php

/**
 * Adds extra debug information to PHP's output
<<<<<<< HEAD
 * 
 * @todo Add other pertinent debug information to output
=======
>>>>>>> da842f9... Added APIgen configuration
 */
$debug_mode = false;
if ($debug_mode === true) {
    // show superglobal information
    echo xdebug_dump_superglobals();
}
<<<<<<< HEAD
=======

/**
 * Turns on Composer's autoloading
 */
$composer = true;
if ($composer === true) {
    require __DS__ . 'vendor/autoload.php';
}
>>>>>>> da842f9... Added APIgen configuration
