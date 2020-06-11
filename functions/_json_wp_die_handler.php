<?php


/**
 * Kill WordPress execution and display JSON message with error message.
 *
 * This is the handler for wp_die when processing JSON requests.
 *
 * @since 5.1.0
 * @access private
 *
 * @param string       $message Error message.
 * @param string       $title   Optional. Error title. Default empty.
 * @param string|array $args    Optional. Arguments to control behavior. Default empty array.
 */
function _json_wp_die_handler($message, $title = '', $args = array())
{
}