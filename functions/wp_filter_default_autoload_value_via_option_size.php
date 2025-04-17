<?php


/**
 * Filters the default autoload value to disable autoloading if the option value is too large.
 *
 * @since 6.6.0
 * @access private
 *
 * @param bool|null $autoload         The default autoload value to set.
 * @param string    $option           The passed option name.
 * @param mixed     $value            The passed option value to be saved.
 * @param mixed     $serialized_value The passed option value to be saved, in serialized form.
 * @return bool|null Potentially modified $default.
 */
function wp_filter_default_autoload_value_via_option_size($autoload, $option, $value, $serialized_value)
{
}