<?php


/**
 * Checks if any action has been registered for a hook.
 *
 * When using the `$function_to_check` argument, this function may return a non-boolean value
 * that evaluates to false (e.g. 0), so use the `===` operator for testing the return value.
 *
 * @since 2.5.0
 *
 * @see has_filter() has_action() is an alias of has_filter().
 *
 * @param string         $tag               The name of the action hook.
 * @param callable|false $function_to_check Optional. The callback to check for. Default false.
 * @return bool|int If `$function_to_check` is omitted, returns boolean for whether the hook has
 *                  anything registered. When checking a specific function, the priority of that
 *                  hook is returned, or false if the function is not attached.
 * @phpstan-return ($callback is false ? bool : false|int)
 */
function has_action($tag, $function_to_check = \false)
{
}