<?php


/**
 * Gets the timestamp of the last time any post was modified or published.
 *
 * @since 3.1.0
 * @since 4.4.0 The `$post_type` argument was added.
 * @access private
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $timezone  The timezone for the timestamp. See get_lastpostdate().
 *                          for information on accepted values.
 * @param string $field     Post field to check. Accepts 'date' or 'modified'.
 * @param string $post_type Optional. The post type to check. Default 'any'.
 * @return string|false The timestamp in 'Y-m-d H:i:s' format, or false on failure.
 * @phpstan-param 'date'|'modified' $field
 * @phpstan-param 'server'|'blog'|'gmt' $timezone
 */
function _get_last_post_time($timezone, $field, $post_type = 'any')
{
}