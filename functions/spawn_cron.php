<?php


/**
 * Sends a request to run cron through HTTP request that doesn't halt page loading.
 *
 * @since 2.1.0
 * @since 5.1.0 Return values added.
 *
 * @param int $gmt_time Optional. Unix timestamp (UTC). Default 0 (current time is used).
 * @return bool True if spawned, false if no events spawned.
 */
function spawn_cron($gmt_time = 0)
{
}