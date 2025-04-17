<?php


/**
 * Checks if any filter has been registered for a hook.
 *
 * When using the `$callback` argument, this function may return a non-boolean value
 * that evaluates to false (e.g. 0), so use the `===` operator for testing the return value.
 *
 * @since 2.5.0
 *
 * @global WP_Hook[] $wp_filter Stores all of the filters and actions.
 *
 * @param string                      $hook_name The name of the filter hook.
 * @param callable|string|array|false $callback  Optional. The callback to check for.
 *                                               This function can be called unconditionally to speculatively check
 *                                               a callback that may or may not exist. Default false.
 * @return bool|int If `$callback` is omitted, returns boolean for whether the hook has
 *                  anything registered. When checking a specific function, the priority
 *                  of that hook is returned, or false if the function is not attached.
 * @phpstan-return ($callback is false ? bool : false|int)
 */
function has_filter($hook_name, $callback = \false)
{
}