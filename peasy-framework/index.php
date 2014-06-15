<?php
// get page name if set
if (isset($_GET['p'])) {
    # TODO: validate page variable
    $page = trim($_GET['p']);
} else {
    $page = 'root'; // no page? default to root!
}

//load the settings for the specified page
require_once $page . '/' . $page . '-settings.php';

    // show error messages on page if $debug is set to true
    if ($debug === true) {
        // show errors on page
        error_reporting(E_ALL);
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
    }

    // always log errors, regardless of debug setting
    $currentLogging = ini_get('log_errors');
    ini_set('log_errors', 1);

    $currentLogLocation = ini_get('error_log');
    $pageErrorLogLocation = dirname(__FILE__) . '/' . $page . '/errors.log';
    ini_set('error_log', $pageErrorLogLocation);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Set, Get, Load Page Title</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" href="elements/css/kube.min.css" />
        <link rel="stylesheet" href="elements/css/custom.css" />
    </head>
    <body>
        <?php
            // TODO: load navigation
        ?>
        <?php
            // TODO: load header
        ?>
        <?php
            // TODO: load page content
        ?>
        <div class="units-row">
            <div class="unit-80 unit-centered">
                <p><em>Access to the contents of this directory has been forbidden!</em></p>
            </div>
        </div>
        <?php
            // TODO: load footer
        ?>
    </body>
</html>
<?php
    // TODO: return error logging to original state? not clear if functionality is needed
    // ini_set('log_errors', $currentLogging);
?>