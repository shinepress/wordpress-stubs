<?php


/**
 * Schedule a recurring event.
 *
 * Schedules a hook which will be executed by the WordPress actions core on a
 * specific interval, specified by you. The action will trigger when someone
 * visits your WordPress site, if the scheduled time has passed.
 *
 * Valid values for the recurrence are hourly, daily, and twicedaily. These can
 * be extended using the {@see 'cron_schedules'} filter in wp_get_schedules().
 *
 * Use wp_next_scheduled() to prevent duplicates
 *
 * @since 2.1.0
 *
 * @param int $timestamp Unix timestamp (UTC) for when to run the event.
 * @param string $recurrence How often the event should recur.
 * @param string $hook Action hook to execute when event is run.
 * @param array $args Optional. Arguments to pass to the hook's callback function.
 * @return false|void False if the event does not get scheduled.
 * @phpstan-param list<mixed> $args
 * @phpstan-return bool|WP_Error
 */
function wp_schedule_event($timestamp, $recurrence, $hook, $args = array())
{
}