<?php


/**
 * Aborts calls to site meta if it is not supported.
 *
 * @since 5.1.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param mixed $check Skip-value for whether to proceed site meta function execution.
 * @return mixed Original value of $check, or false if site meta is not supported.
 */
function wp_check_site_meta_support_prefilter($check)
{
}