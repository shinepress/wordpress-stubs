<?php


/**
 * Print out option HTML elements for the page parents drop-down.
 *
 * @since 1.5.0
 * @since 4.4.0 `$post` argument was added.
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int         $default Optional. The default page ID to be pre-selected. Default 0.
 * @param int         $parent  Optional. The parent page ID. Default 0.
 * @param int         $level   Optional. Page depth level. Default 0.
 * @param int|WP_Post $post    Post ID or WP_Post object.
 *
 * @return null|false Boolean False if page has no children, otherwise print out html elements.
 */
function parent_dropdown($default = 0, $parent = 0, $level = 0, $post = \null)
{
}