<?php

/**
 * Adds extra debug information to PHP's output
<<<<<<< HEAD
 * 
 * @todo Add other pertinent debug information to output
=======
<<<<<<< HEAD
>>>>>>> da842f9... Added APIgen configuration
=======
>>>>>>> da842f9f627a814885b3a7613ee07700dd576765
>>>>>>> 62e89d19f7382f54e8b4e59b02025a259f4e601a
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
<<<<<<< HEAD
>>>>>>> da842f9... Added APIgen configuration
=======
>>>>>>> da842f9f627a814885b3a7613ee07700dd576765
>>>>>>> 62e89d19f7382f54e8b4e59b02025a259f4e601a
