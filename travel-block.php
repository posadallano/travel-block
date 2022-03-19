<?php

/**
 * Plugin Name: Travel itinerary gutenberg block
 * Description: Plugin that builds a travel itinerary gutenberg block
 * Version: 1.0
 * Author: Andres Posada
 * Author URI: https://andresposada.dev
 * text-domain: travel-it-block
 */

defined( 'ABSPATH' ) or die( 'No authorized access!' );

add_action( 'acf/init', 'techiepress_acf_travel_it_block', 9 );

function techiepress_acf_travel_it_block() {

    // Check function exists.
    if( function_exists( 'acf_register_block_type' ) ) {

        // register a teavel itinerary block.
        acf_register_block_type( array(
            'name'              => 'travelitblock',
            'title'             => __('Travel Itinerary Block'),
            'description'       => __('Travel Itinerary Block to add important information for travellers'),
            'render_callback'   => function() {
               echo '<h3>Our travel block</h3>';
            },
            'category'          => 'media',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'Travel', 'Itinerary', 'Techiepress' ),          
        ) );
    }
}



?>