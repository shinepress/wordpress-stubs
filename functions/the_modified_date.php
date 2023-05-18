<?php


/**
 * Display the date on which the post was last modified.
 *
 * @since 2.1.0
 *
 * @param string $format Optional. PHP date format. Defaults to the 'date_format' option.
 * @param string $before Optional. Output before the date. Default empty.
 * @param string $after  Optional. Output after the date. Default empty.
 * @param bool   $echo   Optional. Whether to echo the date or return it. Default true.
 * @return string|void String if retrieving.
 * @phpstan-return ($display is true ? void : string)
 */
function the_modified_date($format = '', $before = '', $after = '', $echo = \true)
{
}