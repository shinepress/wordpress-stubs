<?php


/**
 * Kill WordPress ajax execution.
 *
 * This is the handler for wp_die when processing Ajax requests.
 *
 * @since 3.4.0
 * @access private
 *
 * @param string       $message Error message.
 * @param string       $title   Optional. Error title (unused). Default empty.
 * @param string|array $args    Optional. Arguments to control behavior. Default empty array.
 * @phpstan-return never
 */
function _ajax_wp_die_handler($message, $title = '', $args = array())
{
}