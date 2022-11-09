<?php


/**
 * Unschedules all events attached to the hook with the specified arguments.
 *
 * Warning: This function may return Boolean FALSE, but may also return a non-Boolean
 * value which evaluates to FALSE. For information about casting to booleans see the
 * {@link https://www.php.net/manual/en/language.types.boolean.php PHP documentation}. Use
 * the `===` operator for testing the return value of this function.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to indicate success or failure,
 *              {@see 'pre_clear_scheduled_hook'} filter added to short-circuit the function.
 *
 * @param string $hook Action hook, the execution of which will be unscheduled.
 * @param array  $args Optional. Array containing each separate argument to pass to the hook's callback function.
 *                     Although not passed to a callback, these arguments are used to uniquely identify the
 *                     event, so they should be the same as those used when originally scheduling the event.
 * @return int|false On success an integer indicating number of events unscheduled (0 indicates no
 *                   events were registered with the hook and arguments combination), false if
 *                   unscheduling one or more events fail.
 * @phpstan-param list<mixed> $args
 * @phpstan-return int|false|WP_Error
 */
function wp_clear_scheduled_hook($hook, $args = array())
{
}