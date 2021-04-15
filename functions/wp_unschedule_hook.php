<?php


/**
 * Unschedules all events attached to the hook.
 *
 * Can be useful for plugins when deactivating to clean up the cron queue.
 *
 * @since 4.9.0
 *
 * @param string $hook Action hook, the execution of which will be unscheduled.
 */
function wp_unschedule_hook($hook)
{
}