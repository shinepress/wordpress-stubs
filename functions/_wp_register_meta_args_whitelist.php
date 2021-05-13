<?php


/**
 * Filters out `register_meta()` args based on an allowed list.
 *
 * `register_meta()` args may change over time, so requiring the allowed list
 * to be explicitly turned off is a warranty seal of sorts.
 *
 * @access private
 * @since 4.6.0
 * @deprecated 5.5.0 Use _wp_register_meta_args_allowed_list() instead.
 *                   Please consider writing more inclusive code.
 *
 * @param array $args         Arguments from `register_meta()`.
 * @param array $default_args Default arguments for `register_meta()`.
 * @return array Filtered arguments.
 */
function _wp_register_meta_args_whitelist($args, $default_args)
{
}