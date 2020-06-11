<?php
// Add custom Theme Functions here
/**
 * Code goes in theme functions.php
 *
 * Disable Infinite Scroll browser history.
 */
add_filter( 'flatsome_infinite_scroll_params', function ( $params ) {
    $params['history'] = false;
    return $params;
} );