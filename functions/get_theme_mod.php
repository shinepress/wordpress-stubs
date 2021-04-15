<?php


/**
 * Retrieves theme modification value for the current theme.
 *
 * If the modification name does not exist, then the $default will be passed
 * through {@link https://www.php.net/sprintf sprintf()} PHP function with
 * the template directory URI as the first string and the stylesheet directory URI
 * as the second string.
 *
 * @since 2.1.0
 *
 * @param string       $name    Theme modification name.
 * @param string|false $default Optional. Theme modification default value. Default false.
 * @return mixed Theme modification value.
 */
function get_theme_mod($name, $default = \false)
{
}