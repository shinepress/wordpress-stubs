<?php


/**
 * Initialises and connects the WordPress Filesystem Abstraction classes.
 * This function will include the chosen transport and attempt connecting.
 *
 * Plugins may add extra transports, And force WordPress to use them by returning
 * the filename via the {@see 'filesystem_method_file'} filter.
 *
 * @since 2.5.0
 *
 * @global WP_Filesystem_Base $wp_filesystem Subclass
 *
 * @param array|false  $args                         Optional. Connection args, These are passed directly to
 *                                                   the `WP_Filesystem_*()` classes. Default false.
 * @param string|false $context                      Optional. Context for get_filesystem_method(). Default false.
 * @param bool         $allow_relaxed_file_ownership Optional. Whether to allow Group/World writable. Default false.
 * @return null|bool false on failure, true on success.
 */
function WP_Filesystem($args = \false, $context = \false, $allow_relaxed_file_ownership = \false)
{
}