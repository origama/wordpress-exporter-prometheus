<?php

    /**
    * Plugin Name: Wordpress Prometheus Exporter
    * Plugin URI: https://github.com/origama/wordpress-exporter-prometheus/
    * Description:  This Wordpress plugin exports metrics for prometheus to scrape 'em 
    * Author: Giuseppe Virzì
    * Author URI: https://github.com/origama
    * Version: 1.1
    */
     
    function my_awesome_func( $data ) {
        return "";
    }
    // reference https://github.com/WP-API/WP-API/blob/develop/lib/infrastructure/class-wp-rest-server.php
    // serve_request() function
    add_action( 'rest_api_init', function () {
      register_rest_route( 'metrics', '/', array(
        'methods' => 'GET',
        'callback' => 'my_awesome_func',
      ) );
    } );
    
    function multiformat_rest_pre_serve_request( $served, $result, $request, $server ) {
    // assumes 'format' was passed into the intial API route
    // example: https://baconipsum.com/wp-json/baconipsum/test-response?format=text
    // the default JSON response will be handled automatically by WP-API
    if ( $request->get_route()=="/metrics" ) {
        header( 'Content-Type: text/plain; charset=' . get_option( 'blog_charset' ) );
        echo "sei un caro amico";
        $served = true; // tells the WP-API that we sent the response already
    }
    return $served;
}
    add_filter( 'rest_pre_serve_request', 'multiformat_rest_pre_serve_request', 10, 4 );
