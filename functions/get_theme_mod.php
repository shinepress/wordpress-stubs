<?php


/**
 * Retrieve theme modification value for the current theme.
 *
 * If the modification name does not exist, then the $default will be passed
 * through {@link https://secure.php.net/sprintf sprintf()} PHP function with the first
 * string the template directory URI and the second string the stylesheet
 * directory URI.
 *
 * @since 2.1.0
 *
 * @param string      $name    Theme modification name.
 * @param bool|string $default
 * @return string
 */
function get_theme_mod($name, $default = \false)
{
}