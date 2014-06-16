<?php
// decide what the name of the page shall be
require_once 'elements/_pagename.php';

//load the settings for the specified page
require_once $page . '/' . $page . '-settings.php';

// show error messages on page if $debug is set to true
// can be turned off in $page-settings.php
// TODO: Security issue? Not really needed? Make a decision!
if ($debug === true) {
    // show errors on page
    error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
}

// always log errors, regardless of debug setting
$currentLogging = ini_get('log_errors');
ini_set('log_errors', 1);

// set the location of the error log
// TODO: Does this need to be reset to a default?
$currentLogLocation = ini_get('error_log');
$pageErrorLogLocation = dirname(__FILE__) . '/' . $page . '/errors.log';
ini_set('error_log', $pageErrorLogLocation);

// enable scripts
// TODO: implement html-compressor to make page responses more efficient
#include_once 'scripts/html-compressor.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php
            // TODO: Better control over initial site configuration
            (trim($pageTitle) != '') ? printf('%s', $pageTitle) : printf('%s', 'Peasy Framework');
            ?></title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" value="<?php printf('%s', $pageDescription); ?>" />
        <link rel="stylesheet" href="elements/css/kube.min.css" />
        <link rel="stylesheet" href="elements/css/custom.css" />

        <?php
        // load custom css for the page
        require_once 'elements/_css.php';
        ?>

    </head>
    <body>
        <?php
        include_once "elements/_navigation.php";
        ?>
        <hr class="unit-100 unit-centered">
        <?php
        require_once 'elements/_header.php';
        ?>
        <hr class="unit-100 unit-centered">
        <?php
        require_once 'elements/_content.php';
        ?>
        <hr class="unit-100 unit-centered">
        <?php
        require_once 'elements/_footer.php';
        ?>
    </body>
</html>