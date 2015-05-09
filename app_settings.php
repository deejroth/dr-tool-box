<?php

/**
 * Adds extra debug information to PHP's output
 * 
 * @todo Add other pertinent debug information to output
 */
$debug_mode = false;
if ($debug_mode === true) {
    // show superglobal information
    echo xdebug_dump_superglobals();
}
