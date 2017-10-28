<?php if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'plugins_loaded', 'social_icons_lite_load_textdomain' );

function social_icons_lite_load_textdomain() {
	load_plugin_textdomain( 'social-icons-lite', false, plugin_basename( dirname( __FILE__ ) ) . '/i18n/languages' );
}
