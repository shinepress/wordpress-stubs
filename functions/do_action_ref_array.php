<?php


/**
 * Calls the callback functions that have been added to an action hook, specifying arguments in an array.
 *
 * @since 2.1.0
 *
 * @see do_action() This function is identical, but the arguments passed to the
 *                  functions hooked to `$tag` are supplied using an array.
 * @global array $wp_filter         Stores all of the filters
 * @global array $wp_actions        Increments the amount of times action was triggered.
 * @global array $wp_current_filter Stores the list of current filters with the current one last
 *
 * @param string $tag  The name of the action to be executed.
 * @param array  $args The arguments supplied to the functions hooked to `$tag`.
 */
function do_action_ref_array($tag, $args)
{
}