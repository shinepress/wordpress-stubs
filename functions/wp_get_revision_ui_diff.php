<?php


/**
 * WordPress Administration Revisions API
 *
 * @package WordPress
 * @subpackage Administration
 * @since 3.6.0
 */
/**
 * Get the revision UI diff.
 *
 * @since 3.6.0
 *
 * @param WP_Post|int $post         The post object or post ID.
 * @param int         $compare_from The revision ID to compare from.
 * @param int         $compare_to   The revision ID to come to.
 * @return array|false Associative array of a post's revisioned fields and their diffs.
 *                     Or, false on failure.
 */
function wp_get_revision_ui_diff($post, $compare_from, $compare_to)
{
}