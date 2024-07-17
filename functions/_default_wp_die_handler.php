<?php


/**
 * Kills WordPress execution and displays HTML page with an error message.
 *
 * This is the default handler for wp_die(). If you want a custom one,
 * you can override this using the {@see 'wp_die_handler'} filter in wp_die().
 *
 * @since 3.0.0
 * @access private
 *
 * @param string|WP_Error $message Error message or WP_Error object.
 * @param string          $title   Optional. Error title. Default empty string.
 * @param string|array    $args    Optional. Arguments to control behavior. Default empty array.
 */
function _default_wp_die_handler($message, $title = '', $args = array())
{
}