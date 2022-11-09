<?php


/**
 * Unschedules all events attached to the hook.
 *
 * Can be useful for plugins when deactivating to clean up the cron queue.
 *
 * Warning: This function may return Boolean FALSE, but may also return a non-Boolean
 * value which evaluates to FALSE. For information about casting to booleans see the
 * {@link https://www.php.net/manual/en/language.types.boolean.php PHP documentation}. Use
 * the `===` operator for testing the return value of this function.
 *
 * @since 4.9.0
 * @since 5.1.0 Return value added to indicate success or failure.
 * @since 5.7.0 The `$wp_error` parameter was added.
 *
 * @param string $hook     Action hook, the execution of which will be unscheduled.
 * @param bool   $wp_error Optional. Whether to return a WP_Error on failure. Default false.
 * @return int|false|WP_Error On success an integer indicating number of events unscheduled (0 indicates no
 *                            events were registered on the hook), false or WP_Error if unscheduling fails.
 */
function wp_unschedule_hook($hook, $wp_error = \false)
{
}