<?php

$content_file = $page . '/' . $page . '-content.php';
if (file_exists($content_file)) {
    include_once($content_file);
} else {
    printf("<!-- no custom content for %s page -->", $page);
}