<?php

/**
 * This file contains functions relevant to the peasy framework and should be
 * included at the top of the template page.
 *
 * The functions included in this page allows the template file to be much cleaner
 * and easier to read.
 *
 * PHP version 5.5
 *
 * @category  PHP
 * @package   LoremPixelClass
 * @author    DeeJRoth <i.am@beardedfolk.com>
 * @copyright 2014 DeeJRoth
 * @license   http://opensource.org/licenses/MIT MIT
 *
 * @link      peasy_functions.php PeasyFunctions
 *
 * @since     June 28, 2014
 *
 * @filesource
 * @access public
 */

namespace PeasyFramework;

/**
 * Whether or not to display errors. The error reporting level is set to the
 * highest according to http://www.php.net/manual/en/errorfunc.constants.php. By
 * default, errors are shown on the rendered page.
 *
 * @param bool $debugging False to hide errors, true to show them
 *
 * @return void
 */
function showDebugInfo($debugging = true)
{
    error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
    if ($debugging === true) {
        // show errors on page
        ini_set('display_errors', 1);
    } else {
        ini_set('display_errors', 0);
    }
}

/**
 * Enables PHP logging and sets the log file for the current page
 *
 * @param string $queriedPage The directory to put the errors.log file into
 *
 * @return array
 */
function setLogLocation($queriedPage = 'default')
{
    $logging = array();
    // set php to log errors
    $logging['pre']['enabled'] = ini_get('log_errors');
    ini_set('log_errors', 1);

    // set php log file location
    $logging['pre']['location'] = ini_get('error_log');
    $logging['post']['file-path'] = dirname(__FILE__) . '/' . $queriedPage . '/errors.log';
    ini_set('error_log', $logging['post']['file-path']);

    return $logging;
}

/**
 * Checks $pageTitle for value and displays the appropriate value
 *
 * @param string $title     Title of the page to be rendered
 * @param bool   $debugging Whether to show debug information
 *
 * @return string
 */
function renderPageTitle($title = '', $debugging = true)
{
    if (trim($title) !== '' && $debugging === true) {
        return sprintf('%s (%d)', trim($title), strlen(trim($title)));
    } else if (trim($title) !== '' && $debugging === false) {
        return sprintf('%s', trim($title));
    } else {
        return 'Peasy Framework!';
    }
}

/**
 * Trim the $pageDescription variable and render it if it isn't blank
 *
 * @param string $description The description of the page being rendered
 * @param bool   $debugging   Whether to show debug information
 *
 * @return string
 */
function renderPageDescription($description, $debugging = true)
{
    if (trim($description) !== '' && $debugging === true) {
        return sprintf('%s (%d)', trim($description), strlen(trim($description)));
    } else if (trim($description) !== '' && $debugging === false) {
        return sprintf('%s', trim($description));
    } else {
        return 'Peasy Framework is super easy to use and configure. Have fun '
            . 'with it! Alter it! Make it yours!';
    }
}
