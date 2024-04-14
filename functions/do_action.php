<?php


/**
 * Execute functions hooked on a specific action hook.
 *
 * This function invokes all functions attached to action hook `$tag`. It is
 * possible to create new action hooks by simply calling this function,
 * specifying the name of the new hook using the `$tag` parameter.
 *
 * You can pass extra arguments to the hooks, much like you can with apply_filters().
 *
 * @since 1.2.0
 *
 * @global array $wp_filter         Stores all of the filters
 * @global array $wp_actions        Increments the amount of times action was triggered.
 * @global array $wp_current_filter Stores the list of current filters with the current one last
 *
 * @param string $tag     The name of the action to be executed.
 * @param mixed  $arg,... Optional. Additional arguments which are passed on to the
 *                        functions hooked to the action. Default empty.
 * @phpstan-return void
 */
function do_action($tag, $arg = '')
{
}