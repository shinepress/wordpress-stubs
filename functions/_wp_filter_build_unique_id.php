<?php


/**
 * Builds a unique string ID for a hook callback function.
 *
 * Functions and static method callbacks are just returned as strings and
 * shouldn't have any speed penalty.
 *
 * @link https://core.trac.wordpress.org/ticket/3875
 *
 * @since 2.2.3
 * @since 5.3.0 Removed workarounds for spl_object_hash().
 *              `$hook_name` and `$priority` are no longer used,
 *              and the function always returns a string.
 *
 * @access private
 *
 * @param string                $hook_name Unused. The name of the filter to build ID for.
 * @param callable|string|array $callback  The callback to generate ID for. The callback may
 *                                         or may not exist.
 * @param int                   $priority  Unused. The order in which the functions
 *                                         associated with a particular action are executed.
 * @return string Unique function ID for usage as array key.
 */
function _wp_filter_build_unique_id($hook_name, $callback, $priority)
{
}