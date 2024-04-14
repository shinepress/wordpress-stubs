<?php


/**
 * Check if any filter has been registered for a hook.
 *
 * @since 2.5.0
 *
 * @global array $wp_filter Stores all of the filters and actions.
 *
 * @param string        $tag               The name of the filter hook.
 * @param callable|bool $function_to_check Optional. The callback to check for. Default false.
 * @return false|int If $function_to_check is omitted, returns boolean for whether the hook has
 *                   anything registered. When checking a specific function, the priority of that
 *                   hook is returned, or false if the function is not attached. When using the
 *                   $function_to_check argument, this function may return a non-boolean value
 *                   that evaluates to false (e.g.) 0, so use the === operator for testing the
 *                   return value.
 * @phpstan-return ($callback is false ? bool : false|int)
 */
function has_filter($tag, $function_to_check = \false)
{
}