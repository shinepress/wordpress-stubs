<?php


/**
 * WordPress Cron API
 *
 * @package WordPress
 */
/**
 * Schedules an event to run only once.
 *
 * Schedules an event which will execute once by the WordPress actions core at
 * a time which you specify. The action will fire off when someone visits your
 * WordPress site, if the schedule time has passed.
 *
 * Note that scheduling an event to occur within 10 minutes of an existing event
 * with the same action hook will be ignored unless you pass unique `$args` values
 * for each scheduled event.
 *
 * @since 2.1.0
 * @link https://codex.wordpress.org/Function_Reference/wp_schedule_single_event
 *
 * @param int $timestamp Unix timestamp (UTC) for when to run the event.
 * @param string $hook Action hook to execute when event is run.
 * @param array $args Optional. Arguments to pass to the hook's callback function.
 * @return false|void False if the event does not get scheduled.
 * @phpstan-param list<mixed> $args
 * @phpstan-return ($wp_error is false ? bool : true|\WP_Error)
 */
function wp_schedule_single_event($timestamp, $hook, $args = array())
{
}