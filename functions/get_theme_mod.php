<?php


/**
 * Retrieves theme modification value for the current theme.
 *
 * If the modification name does not exist and `$default` is a string, then the
 * default will be passed through the {@link https://www.php.net/sprintf sprintf()}
 * PHP function with the template directory URI as the first value and the
 * stylesheet directory URI as the second value.
 *
 * @since 2.1.0
 *
 * @param string $name    Theme modification name.
 * @param mixed  $default Optional. Theme modification default value. Default false.
 * @return mixed Theme modification value.
 */
function get_theme_mod($name, $default = \false)
{
}