<?php
// get page name if set
if (isset($_GET['p'])) {
    // TODO: validate page variable
    $page = trim($_GET['p']);
} else {
    $page = 'root'; // no page? default to root!
}