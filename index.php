<?php
/*
Plugin Name: Iframe Plugin
Description: We will demonstrate how to make it git-updater compatible
Version:     1.0.0
Author:      FYCLABS
License:     GPL2 etc
GitHub Plugin URI: kml92/iframe-plugin
Primary Branch: main
Release Asset: true
*/


if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once 'plugin-updater.php';
$updater = new PDUpdater(__FILE__);
$updater->set_username('kml92');
$updater->set_repository('iframe-plugin');
// $updater->authorize('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');
$updater->initialize();
