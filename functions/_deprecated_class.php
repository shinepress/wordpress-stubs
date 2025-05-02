<?php


/**
 * Marks a class as deprecated and informs when it has been used.
 *
 * There is a {@see 'deprecated_class_run'} hook that will be called that can be used
 * to get the backtrace up to what file and function called the deprecated class.
 *
 * The current behavior is to trigger a user error if `WP_DEBUG` is true.
 *
 * This function is to be used in the class constructor for every deprecated class.
 * See {@see _deprecated_constructor()} for deprecating PHP4-style constructors.
 *
 * @since 6.4.0
 *
 * @param string $class_name  The name of the class being instantiated.
 * @param string $version     The version of WordPress that deprecated the class.
 * @param string $replacement Optional. The class or function that should have been called.
 *                            Default empty string.
 */
function _deprecated_class($class_name, $version, $replacement = '')
{
}