<?php


/**
 * Reschedule a recurring event.
 *
 * @since 2.1.0
 *
 * @param int $timestamp Unix timestamp (UTC) for when to run the event.
 * @param string $recurrence How often the event should recur.
 * @param string $hook Action hook to execute when event is run.
 * @param array $args Optional. Arguments to pass to the hook's callback function.
 * @return false|void False if the event does not get rescheduled.
 * @phpstan-param list<mixed> $args
 * @phpstan-return bool|WP_Error
 */
function wp_reschedule_event($timestamp, $recurrence, $hook, $args = array())
{
}