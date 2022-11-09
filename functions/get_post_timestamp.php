<?php


/**
 * Retrieve post published or modified time as a Unix timestamp.
 *
 * Note that this function returns a true Unix timestamp, not summed with timezone offset
 * like older WP functions.
 *
 * @since 5.3.0
 *
 * @param int|WP_Post $post  Optional. WP_Post object or ID. Default is global `$post` object.
 * @param string      $field Optional. Published or modified time to use from database. Accepts 'date' or 'modified'.
 *                           Default 'date'.
 * @return int|false Unix timestamp on success, false on failure.
 */
function get_post_timestamp($post = \null, $field = 'date')
{
}