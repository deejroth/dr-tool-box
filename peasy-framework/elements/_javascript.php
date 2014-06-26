<?php

$js_file = $page . '/javascript/' . $page . '-javascript.js';
if ( file_exists($js_file) ) {
    printf('<script src="%s"></script>', $js_file);
} else {
    printf("<!-- no custom javascript for %s page -->", $page);
}