<?php


/**
 * Returns whether or not an action hook is currently being processed.
 *
 * @since 3.9.0
 *
 * @param string|null $hook_name Optional. Action hook to check. Defaults to null,
 *                               which checks if any action is currently being run.
 * @return bool Whether the action is currently in the stack.
 */
function doing_action($hook_name = \null)
{
}