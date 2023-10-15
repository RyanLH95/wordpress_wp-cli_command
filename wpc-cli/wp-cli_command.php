<?php
/**
 * Plugin Name: WP-CLI 'dmg-read-more-search'
 * Plugin URI: N/A
 * Description: Custom WP-CLI Commands
 * Authour: Ryan Henry
 * Version: 1.0.0
 * Author URI: https://ryanhenry.co.uk
 */

if (defined('WP_CLI') && WP_CLI) {

 require_once plugin_dir_path(__FILE__) . '/vendor/fakerphp/faker/src/
 autoload.php';

 WP_CLI::add_command();


 // up wpc generate_floorplans --amount=10
}