<?php

$css_file = $page . '/css/' . $page . '-css.css';
if (file_exists($css_file)) {
    printf('<link rel="stylesheet" href="%s" />', $css_file);
} else {
    printf("<!-- no custom stlyes for %s page -->", $page);
}