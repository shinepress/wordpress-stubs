<?php


/**
 * Use the "The Tortoise and the Hare" algorithm to detect loops.
 *
 * For every step of the algorithm, the hare takes two steps and the tortoise one.
 * If the hare ever laps the tortoise, there must be a loop.
 *
 * @since 3.1.0
 * @access private
 *
 * @param callable $callback      Function that accepts ( ID, callback_arg, ... ) and outputs parent_ID.
 * @param int      $start         The ID to start the loop check at.
 * @param array    $override      Optional. An array of ( ID => parent_ID, ... ) to use instead of $callback.
 *                                Default empty array.
 * @param array    $callback_args Optional. Additional arguments to send to $callback. Default empty array.
 * @param bool     $_return_loop  Optional. Return loop members or just detect presence of loop? Only set
 *                                to true if you already know the given $start is part of a loop (otherwise
 *                                the returned array might include branches). Default false.
 * @return mixed Scalar ID of some arbitrary member of the loop, or array of IDs of all members of loop if
 *               $_return_loop
 */
function wp_find_hierarchy_loop_tortoise_hare($callback, $start, $override = array(), $callback_args = array(), $_return_loop = \false)
{
}