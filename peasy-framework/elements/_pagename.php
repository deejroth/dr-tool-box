<?php

// get page name if set
if ( isset($_GET['p']) ) {
    // TODO: validate page variable
    // pagge variable should contain no spaces, and be only alpha numeric along with
    // occassional hyphen
    $page = trim($_GET['p']);
} else {
    $page = 'default'; // no page? default to root!
}