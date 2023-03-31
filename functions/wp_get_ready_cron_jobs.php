<?php


/**
 * Retrieves cron jobs ready to be run.
 *
 * Returns the results of _get_cron_array() limited to events ready to be run,
 * ie, with a timestamp in the past.
 *
 * @since 5.1.0
 *
 * @return array[] Array of cron job arrays ready to be run.
 */
function wp_get_ready_cron_jobs()
{
}