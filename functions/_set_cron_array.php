<?php


/**
 * Updates the cron option with the new cron array.
 *
 * @since 2.1.0
 * @since 5.1.0 Return value modified to outcome of update_option().
 * @since 5.7.0 The `$wp_error` parameter was added.
 *
 * @access private
 *
 * @param array $cron     Cron info array from _get_cron_array().
 * @param bool  $wp_error Optional. Whether to return a WP_Error on failure. Default false.
 * @return bool|WP_Error True if cron array updated. False or WP_Error on failure.
 */
function _set_cron_array($cron, $wp_error = \false)
{
}