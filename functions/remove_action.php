<?php


/**
 * Removes a function from a specified action hook.
 *
 * This function removes a function attached to a specified action hook. This
 * method can be used to remove default functions attached to a specific filter
 * hook and possibly replace them with a substitute.
 *
 * @since 1.2.0
 *
 * @param string   $tag                The action hook to which the function to be removed is hooked.
 * @param callable $function_to_remove The name of the function which should be removed.
 * @param int      $priority           Optional. The priority of the function. Default 10.
 * @return bool Whether the function is removed.
 */
function remove_action($tag, $function_to_remove, $priority = 10)
{
}