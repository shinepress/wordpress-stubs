<?php


/**
 * Mark a function as deprecated and inform when it has been used.
 *
 * There is a {@see 'hook deprecated_function_run'} that will be called that can be used
 * to get the backtrace up to what file and function called the deprecated
 * function.
 *
 * The current behavior is to trigger a user error if `WP_DEBUG` is true.
 *
 * This function is to be used in every function that is deprecated.
 *
 * @since 2.5.0
 * @access private
 *
 * @param string $function    The function that was called.
 * @param string $version     The version of WordPress that deprecated the function.
 * @param string $replacement Optional. The function that should have been called. Default null.
 */
function _deprecated_function($function, $version, $replacement = \null)
{
}