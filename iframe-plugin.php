<?php
/*
	Plugin Name: Iframe Plugin
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.2
	Author: FYCLabs
	Author URI: 
*/

require_once 'plugin-updater.php';
$updater = new PDUpdater(__FILE__);
$updater->set_username('kml92');
$updater->set_repository('iframe-plugin');
$updater->initialize();
