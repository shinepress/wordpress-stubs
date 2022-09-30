<?php


/**
 * Retrieve the recurrence schedule for an event.
 *
 * @see wp_get_schedules() for available schedules.
 *
 * @since 2.1.0
 * @since 5.1.0 {@see 'get_schedule'} filter added.
 *
 * @param string $hook Action hook to identify the event.
 * @param array  $args Optional. Arguments passed to the event's callback function.
 * @return string|false False, if no schedule. Schedule name on success.
 * @phpstan-param list<mixed> $args
 * @phpstan-return string|false
 */
function wp_get_schedule($hook, $args = array())
{
}