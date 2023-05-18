<?php


/**
 * Display styles that are in the $handles queue.
 *
 * Passing an empty array to $handles prints the queue,
 * passing an array with one string prints that style,
 * and passing an array of strings prints those styles.
 *
 * @global WP_Styles $wp_styles The WP_Styles object for printing styles.
 *
 * @since 2.6.0
 *
 * @param string|bool|array $handles Styles to be printed. Default 'false'.
 * @return array On success, a processed array of WP_Dependencies items; otherwise, an empty array.
 */
function wp_print_styles($handles = \false)
{
}