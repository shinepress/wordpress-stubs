<?php


/**
 * Retrieve cron jobs ready to be run.
 *
 * Returns the results of _get_cron_array() limited to events ready to be run,
 * ie, with a timestamp in the past.
 *
 * @since 5.1.0
 *
 * @return array Cron jobs ready to be run.
 */
function wp_get_ready_cron_jobs()
{
}