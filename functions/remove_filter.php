<?php


/**
 * Removes a callback function from a filter hook.
 *
 * This can be used to remove default functions attached to a specific filter
 * hook and possibly replace them with a substitute.
 *
 * To remove a hook, the `$callback` and `$priority` arguments must match
 * when the hook was added. This goes for both filters and actions. No warning
 * will be given on removal failure.
 *
 * @since 1.2.0
 *
 * @global WP_Hook[] $wp_filter Stores all of the filters and actions.
 *
 * @param string   $hook_name The filter hook to which the function to be removed is hooked.
 * @param callable $callback  The name of the function which should be removed.
 * @param int      $priority  Optional. The exact priority used when adding the original
 *                            filter callback. Default 10.
 * @return bool Whether the function existed before it was removed.
 */
function remove_filter($hook_name, $callback, $priority = 10)
{
}