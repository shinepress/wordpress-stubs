<?php


/**
 * Removes all of the callback functions from a filter hook.
 *
 * @since 2.7.0
 *
 * @global WP_Hook[] $wp_filter Stores all of the filters and actions.
 *
 * @param string    $hook_name The filter to remove callbacks from.
 * @param int|false $priority  Optional. The priority number to remove them from.
 *                             Default false.
 * @return true Always returns true.
 */
function remove_all_filters($hook_name, $priority = \false)
{
}