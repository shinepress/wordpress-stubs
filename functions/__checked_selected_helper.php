<?php


/**
 * Private helper function for checked, selected, disabled and readonly.
 *
 * Compares the first two arguments and if identical marks as `$type`.
 *
 * @since 2.8.0
 * @access private
 *
 * @param mixed  $helper  One of the values to compare.
 * @param mixed  $current The other value to compare if not just true.
 * @param bool   $display Whether to echo or just return the string.
 * @param string $type    The type of checked|selected|disabled|readonly we are doing.
 * @return string HTML attribute or empty string.
 */
function __checked_selected_helper($helper, $current, $display, $type)
{
}