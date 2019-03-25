<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @wordpress-plugin
 * Plugin Name:       Terry Pratchett 2019 Functionality
 * Plugin URI:        http://goodmanfox.com/
 * Description:       This plugin gives functionality to the Terry Pratchett 2019 site.
 * Version:           0.1.10
 * Author:            Goodman Fox
 * Author URI:        http://goodmanfox.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pratchett2019-functionality
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PRATCHETT2019_FUNCTIONALITY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pratchett2019-functionality-activator.php
 */
function activate_pratchett2019_functionality() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pratchett2019-functionality-activator.php';
	Pratchett2019_Functionality_Activator::activate();
}


/**
 * ACTIVE CUSTOM POST TYPES
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/custom_post_types/custom_post_types.php';

/**
 * ACTIVE TAXONOMIES
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/custom_taxonomies/custom_taxonomies.php';

/**
 * REDUCE PRIORITY OF THE YOAST METABOX
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/yoast-metabox.php';

/**
 * HIDE MENU ITEMS
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/hide-admin-menu-items.php';

/**
 * REMOVE DASHBOARD WIDGETS
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/remove-dashboard-widgets.php';

/**
 * CUSTOM ADMIN FOOTER
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/custom-admin-footer.php';

/**
 * REMOVE WP LOGO FROM ADMIN
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/remove-wp-logo-admin.php';

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pratchett2019-functionality-deactivator.php
 */
function deactivate_pratchett2019_functionality() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pratchett2019-functionality-deactivator.php';
	Pratchett2019_Functionality_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pratchett2019_functionality' );
register_deactivation_hook( __FILE__, 'deactivate_pratchett2019_functionality' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pratchett2019-functionality.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pratchett2019_functionality() {

	$plugin = new Pratchett2019_Functionality();
	$plugin->run();

}
run_pratchett2019_functionality();


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5c7d19cbe950a51d15ea5f02/',
    __FILE__,
    'pratchett2019-functionality',
    1
);