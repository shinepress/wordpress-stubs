<?php


/**
 * Kills WordPress execution and displays XML response with an error message.
 *
 * This is the handler for wp_die() when processing XMLRPC requests.
 *
 * @since 3.2.0
 * @access private
 *
 * @global wp_xmlrpc_server $wp_xmlrpc_server
 *
 * @param string       $message Error message.
 * @param string       $title   Optional. Error title. Default empty string.
 * @param string|array $args    Optional. Arguments to control behavior. Default empty array.
 */
function _xmlrpc_wp_die_handler($message, $title = '', $args = array())
{
}