<?php
/*
	Plugin Name: Iframe Plugin
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.0
	Author: FYCLabs
	Author URI: http://www.matthewray.com
*/
if( ! class_exists( 'Plugin_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Plugin_Updater( __FILE__ );
$updater->set_username( 'kml91' );
$updater->set_repository( 'iframe-plugin' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
