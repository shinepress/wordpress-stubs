<?php


/**
 * WordPress Credits Administration API.
 *
 * @package WordPress
 * @subpackage Administration
 * @since 4.4.0
 */
/**
 * Retrieves the contributor credits.
 *
 * @since 3.2.0
 * @since 5.6.0 Added the `$version` and `$locale` parameters.
 *
 * @param string $version WordPress version. Defaults to the current version.
 * @param string $locale  WordPress locale. Defaults to the current user's locale.
 * @return array|false A list of all of the contributors, or false on error.
 */
function wp_credits($version = '', $locale = '')
{
}