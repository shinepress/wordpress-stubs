<?php


/**
 * Marks a constructor as deprecated and informs when it has been used.
 *
 * Similar to _deprecated_function(), but with different strings. Used to
 * remove PHP4-style constructors.
 *
 * The current behavior is to trigger a user error if `WP_DEBUG` is true.
 *
 * This function is to be used in every PHP4-style constructor method that is deprecated.
 *
 * @since 4.3.0
 * @since 4.5.0 Added the `$parent_class` parameter.
 * @since 5.4.0 This function is no longer marked as "private".
 * @since 5.4.0 The error type is now classified as E_USER_DEPRECATED (used to default to E_USER_NOTICE).
 *
 * @param string $class_name   The class containing the deprecated constructor.
 * @param string $version      The version of WordPress that deprecated the function.
 * @param string $parent_class Optional. The parent class calling the deprecated constructor.
 *                             Default empty string.
 */
function _deprecated_constructor($class_name, $version, $parent_class = '')
{
}