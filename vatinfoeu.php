<?php

/**
 * Plugin Name: VAT Info EU
 * Author: Radish Concepts
 * Author URI: http://www.radishconcepts.com
 * Version: 0.1
 */

if ( ! class_exists( 'Radish_Autoload_Tester' ) ) {
	include( 'vendor/radishconcepts/radish-autoload-tester/classes/radish-autoload-tester.php' );
}

define( 'EUVI_PLUGIN_FILE_PATH', __FILE__ );

$autoloader = new Radish_Autoload_Tester( 'EU_VAT_Info', EUVI_PLUGIN_FILE_PATH );
new VAT_Info_EU();