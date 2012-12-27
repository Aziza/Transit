<?php
/**
 * @copyright	Copyright 2006-2013, Miles Johnson - http://milesj.me
 * @license		http://opensource.org/licenses/mit-license.php - Licensed under the MIT License
 * @link		http://milesj.me/code/php/transit
 */

error_reporting(E_ALL | E_STRICT);

define('TEST_DIR', __DIR__);
define('VENDOR_DIR', dirname(TEST_DIR) . '/vendor');

// Ensure that composer has installed all dependencies
if (!file_exists(dirname(TEST_DIR) . '/composer.lock')) {
	exit('Please install composer dependencies before running tests!');
}

// Include the composer autoloader
$loader = require VENDOR_DIR . '/autoload.php';
$loader->add('Transit', TEST_DIR);