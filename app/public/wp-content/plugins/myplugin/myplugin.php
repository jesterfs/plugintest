<?php
/*
Plugin Name: myplugin
Description: Welcome to WordPress plugin development.
Plugin URI:  https://plugin-planet.com/
Author:      Jeff Starr
Version:     1.0
License:     GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.txt

*/
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// if admin area
if ( is_admin() ) {
  //include dependencies
  require_once plugin_dir_path(__FILE__) . 'admin/admin_menu.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings_page.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-register.php';
  require_once plugin_dir_path(__FILE__) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path(__FILE__) . 'admin/settings-validate.php';

}

require_once plugin_dir_path(__FILE__) . 'includes/core-functions.php';

// default plugin options
function myplugin_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}
