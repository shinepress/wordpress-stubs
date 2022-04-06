<?php


/**
 * Unschedule a previously scheduled event.
 *
 * The $timestamp and $hook parameters are required so that the event can be
 * identified.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to boolean indicating success or failure,
 *              {@see 'pre_unschedule_event'} filter added to short-circuit the function.
 *
 * @param int    $timestamp Unix timestamp (UTC) of the event.
 * @param string $hook      Action hook of the event.
 * @param array  $args      Optional. Array containing each separate argument to pass to the hook's callback function.
 *                          Although not passed to a callback, these arguments are used to uniquely identify the
 *                          event, so they should be the same as those used when originally scheduling the event.
 * @return bool True if event successfully unscheduled. False for failure.
 */
function wp_unschedule_event($timestamp, $hook, $args = array())
{
}