<?php


/**
 * Reschedules a recurring event.
 *
 * Mainly for internal use, this takes the time stamp of a previously run
 * recurring event and reschedules it for its next run.
 *
 * To change upcoming scheduled events, use wp_schedule_event() to
 * change the recurrence frequency.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to boolean indicating success or failure,
 *              {@see 'pre_reschedule_event'} filter added to short-circuit the function.
 *
 * @param int    $timestamp  Unix timestamp (UTC) for when the event was scheduled.
 * @param string $recurrence How often the event should subsequently recur. See wp_get_schedules() for accepted values.
 * @param string $hook       Action hook to execute when the event is run.
 * @param array  $args       Optional. Array containing each separate argument to pass to the hook's callback function.
 * @return bool True if event successfully rescheduled. False for failure.
 * @phpstan-param list<mixed> $args
 * @phpstan-return ($wp_error is false ? bool : true|\WP_Error)
 */
function wp_reschedule_event($timestamp, $recurrence, $hook, $args = array())
{
}