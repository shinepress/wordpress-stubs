<?php


/**
 * Unschedules all events attached to the hook with the specified arguments.
 *
 * @since 2.1.0
 *
 * @param string $hook Action hook, the execution of which will be unscheduled.
 * @param array $args Optional. Arguments that were to be passed to the hook's callback function.
 * @phpstan-param list<mixed> $args
 * @phpstan-return int|false|WP_Error
 */
function wp_clear_scheduled_hook($hook, $args = array())
{
}