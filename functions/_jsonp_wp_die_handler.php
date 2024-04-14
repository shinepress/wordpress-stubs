<?php


/**
 * Kills WordPress execution and displays JSONP response with an error message.
 *
 * This is the handler for wp_die() when processing JSONP requests.
 *
 * @since 5.2.0
 * @access private
 *
 * @param string       $message Error message.
 * @param string       $title   Optional. Error title. Default empty string.
 * @param string|array $args    Optional. Arguments to control behavior. Default empty array.
 */
function _jsonp_wp_die_handler($message, $title = '', $args = array())
{
}