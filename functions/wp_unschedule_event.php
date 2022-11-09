<?php


/**
 * Unschedule a previously scheduled event.
 *
 * The $timestamp and $hook parameters are required so that the event can be
 * identified.
 *
 * @since 2.1.0
 *
 * @param int $timestamp Unix timestamp (UTC) for when to run the event.
 * @param string $hook Action hook, the execution of which will be unscheduled.
 * @param array $args Arguments to pass to the hook's callback function.
 * Although not passed to a callback function, these arguments are used
 * to uniquely identify the scheduled event, so they should be the same
 * as those used when originally scheduling the event.
 * @return false|void False if the event does not get unscheduled.
 * @phpstan-param list<mixed> $args
 * @phpstan-return bool|WP_Error
 */
function wp_unschedule_event($timestamp, $hook, $args = array())
{
}