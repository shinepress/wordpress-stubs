<?php


/**
 * Schedules a recurring event.
 *
 * Schedules a hook which will be triggered by WordPress at the specified interval.
 * The action will trigger when someone visits your WordPress site if the scheduled
 * time has passed.
 *
 * Valid values for the recurrence are 'hourly', 'daily', and 'twicedaily'. These can
 * be extended using the {@see 'cron_schedules'} filter in wp_get_schedules().
 *
 * Note that scheduling an event to occur within 10 minutes of an existing event
 * with the same action hook will be ignored unless you pass unique `$args` values
 * for each scheduled event.
 *
 * Use wp_next_scheduled() to prevent duplicate events.
 *
 * Use wp_schedule_single_event() to schedule a non-recurring event.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to boolean indicating success or failure,
 *              {@see 'pre_schedule_event'} filter added to short-circuit the function.
 *
 * @link https://codex.wordpress.org/Function_Reference/wp_schedule_event
 *
 * @param int    $timestamp  Unix timestamp (UTC) for when to next run the event.
 * @param string $recurrence How often the event should subsequently recur. See wp_get_schedules() for accepted values.
 * @param string $hook       Action hook to execute when the event is run.
 * @param array  $args       Optional. Array containing each separate argument to pass to the hook's callback function.
 * @return bool True if event successfully scheduled. False for failure.
 */
function wp_schedule_event($timestamp, $recurrence, $hook, $args = array())
{
}