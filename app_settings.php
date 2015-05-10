<?php

/**
 * Adds extra debug information to PHP's output
<<<<<<< HEAD
 * 
 * @todo Add other pertinent debug information to output
=======
>>>>>>> da842f9f627a814885b3a7613ee07700dd576765
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
>>>>>>> da842f9f627a814885b3a7613ee07700dd576765
