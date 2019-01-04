<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://verzola.net
 * @since             1.0.0
 * @package           _base
 *
 * @wordpress-plugin
 * Plugin Name:       _base
 * Plugin URI:        _plugin_uri
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            _plugin_author_
 * Author URI:        _plugin_author_uri_
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       _base
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

define('PLUGIN_NAME_VERSION', '1.0.0');

require_once __DIR__ . '/vendor/autoload.php';

register_activation_hook(__FILE__, function () {
    \Base\Activator::activate();
});

register_deactivation_hook(__FILE__, function () {
    \Base\Deactivator::deactivate();
});

(new Base\Base())->run();
