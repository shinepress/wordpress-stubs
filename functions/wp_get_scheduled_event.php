<?php


/**
 * Retrieve a scheduled event.
 *
 * Retrieve the full event object for a given event, if no timestamp is specified the next
 * scheduled event is returned.
 *
 * @since 5.1.0
 *
 * @param string   $hook      Action hook of the event.
 * @param array    $args      Optional. Array containing each separate argument to pass to the hook's callback function.
 *                            Although not passed to a callback, these arguments are used to uniquely identify the
 *                            event, so they should be the same as those used when originally scheduling the event.
 * @param int|null $timestamp Optional. Unix timestamp (UTC) of the event. If not specified, the next scheduled event is returned.
 * @return false|object The event object. False if the event does not exist.
 */
function wp_get_scheduled_event($hook, $args = array(), $timestamp = \null)
{
}