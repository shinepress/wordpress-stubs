<?php


/**
 * Kills WordPress execution and displays an error message.
 *
 * This is the handler for wp_die() when processing APP requests.
 *
 * @since 3.4.0
 * @since 5.1.0 Added the $title and $args parameters.
 * @access private
 *
 * @param string       $message Optional. Response to print. Default empty string.
 * @param string       $title   Optional. Error title (unused). Default empty string.
 * @param string|array $args    Optional. Arguments to control behavior. Default empty array.
 */
function _scalar_wp_die_handler($message = '', $title = '', $args = array())
{
}