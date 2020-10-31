<?php


/**
 * Filter the default value for the option.
 *
 * For settings which register a default setting in `register_setting()`, this
 * function is added as a filter to `default_option_{$option}`.
 *
 * @since 4.7.0
 *
 * @param mixed $default Existing default value to return.
 * @param string $option Option name.
 * @param bool $passed_default Was `get_option()` passed a default value?
 * @return mixed Filtered default value.
 */
function filter_default_option($default, $option, $passed_default)
{
}