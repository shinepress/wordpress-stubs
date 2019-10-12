<?php


/**
 * Performs different checks for attribute values.
 *
 * The currently implemented checks are "maxlen", "minlen", "maxval", "minval"
 * and "valueless".
 *
 * @since 1.0.0
 *
 * @param string $value      Attribute value
 * @param string $vless      Whether the value is valueless. Use 'y' or 'n'
 * @param string $checkname  What $checkvalue is checking for.
 * @param mixed  $checkvalue What constraint the value should pass
 * @return bool Whether check passes
 */
function wp_kses_check_attr_val($value, $vless, $checkname, $checkvalue)
{
}