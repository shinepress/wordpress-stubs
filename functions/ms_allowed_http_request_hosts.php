<?php


/**
 * Whitelists any domain in a multisite installation for safe HTTP requests.
 *
 * Attached to the {@see 'http_request_host_is_external'} filter.
 *
 * @since 3.6.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 * @staticvar array $queried
 *
 * @param bool   $is_external
 * @param string $host
 * @return bool
 */
function ms_allowed_http_request_hosts($is_external, $host)
{
}