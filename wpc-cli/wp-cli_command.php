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

  class WPC_CLI {

    public function custom_wp_query( $args, $assoc_args ) {
        $query_args = array(
            'post_type'      => 'post',
        
            // Query performance optimization.
            'fields'         => 'ids',
            'no_found_rows'  => true,
            'posts_per_page' => -1,
        );
        
        $query = new WP_Query( $query_args );
        if ( $query->posts ) {
            foreach ( $query->posts as $key => $post_id ) {
                WP_CLI::line( $post_id );
            }
        }

  WP_CLI::add_command('wpc', 'WPC_CLI');
    }
  }
 // up wpc generate_floorplans --amount=10
}