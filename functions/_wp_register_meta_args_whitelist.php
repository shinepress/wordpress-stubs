<?php


/**
 * Filter out `register_meta()` args based on a whitelist.
 * `register_meta()` args may change over time, so requiring the whitelist
 * to be explicitly turned off is a warranty seal of sorts.
 *
 * @access private
 * @since  4.6.0
 *
 * @param  array $args         Arguments from `register_meta()`.
 * @param  array $default_args Default arguments for `register_meta()`.
 *
 * @return array Filtered arguments.
 */
function _wp_register_meta_args_whitelist($args, $default_args)
{
}