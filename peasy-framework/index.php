<?php
/**
 * Template page
 *
 * This file holds the template for the content and settings for each page.
 * It pulls data from the {page}-settings.php and {page}-content.php files for
 * each page created by the user.
 *
 * PHP version 5.5
 *
 * @category  PHP
 * @package   LoremPixelClass
 * @author    DeeJRoth <i.am@beardedfolk.com>
 * @copyright 2014 DeeJRoth
 * @license   http://opensource.org/licenses/MIT MIT
 *
 * @link      /index.php
 *
 * @since     June 26, 2014
 *
 * @filesource
 * @access public
 *
 */
/**
 * @see scripts/peasy_functions.php
 */
require_once 'scripts/peasy_functions.php';
use \PeasyFramework as Peasy;

/**
 * @see elements/_pagename.php
 */
require_once 'elements/_pagename.php';

/**
 * This particular require statement loads settings for the page the user has
 * queried.
 *
 * Require statement gives access to the variables:
 * <ul>
 *  <li>$debug</li>
 *  <li>$pageTitle</li>
 *  <li>$pageDescription</li>
 * </ul>
 * The see statement shows a template for viewing the file, replace "page" with
 * the particular page you are attempting to see.
 *
 * @see page/page-settings.php
 */
require_once $page . '/' . $page . '-settings.php';

/**
 * The $debug variable can be found in each page-settings.php file.
 *
 * When $debug is true, debuggin information for PHP and some other pertinent dev
 * information will be displayed where it is appropriate. For example, with debug
 * set to true, the character count of the page title and the page meta-description
 * will be displayed next to their respective values.
 *
 * @see scripts/peasy_functions.php
 */
Peasy\showDebugInfo($debug);

/**
 * Set up PHP logging in specific directory.
 *
 * With the $debug variable set to false, it is still possible to get debug
 * information from PHP, but not any extra information, using a log file set by
 * this application.
 */
$logInfo = Peasy\setLogLocation($page);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php
            printf('%s', Peasy\renderPageTitle($pageTitle, $debug));
            ?>
        </title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="
        <?php
        printf('%s', Peasy\renderPageDescription($pageDescription, $debug));
        ?>
              " />
        <base href="http://peasy.beardeddev.webfactional.com/">
        <link rel="stylesheet" href="elements/css/kube.min.css" />
        <link rel="stylesheet" href="elements/css/custom.css" />

        <!-- load custom css for page -->
        <?php
        /**
         * @todo Load custom css for the page
         */
        require_once 'elements/_css.php';
        ?>
    </head>
    <body>
        <?php
        require_once "elements/_navigation.php";
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

        <?php
        /**
         * @todo Add site wide javascript to template page
         */
        require_once 'elements/_javascript.php';

        /**
         * @todo Load custom javascript for page
         */
        ?>
    </body>
</html>