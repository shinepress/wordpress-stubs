<?php


/**
 * Processes arguments passed to {@see wp_die()} consistently for its handlers.
 *
 * @since 5.1.0
 * @access private
 *
 * @param string       $message Error message.
 * @param string       $title   Optional. Error title. Default empty.
 * @param string|array $args    Optional. Arguments to control behavior. Default empty array.
 * @return array List of processed $message string, $title string, and $args array.
 */
function _wp_die_process_input($message, $title = '', $args = array())
{
}