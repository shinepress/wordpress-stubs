<?php


/**
 * Sanitizes a string into a slug, which can be used in URLs or HTML attributes.
 *
 * By default, converts accent characters to ASCII characters and further
 * limits the output to alphanumeric characters, underscore (_) and dash (-)
 * through the {@see 'sanitize_title'} filter.
 *
 * If `$title` is empty and `$fallback_title` is set, the latter will be used.
 *
 * @since 1.0.0
 *
 * @param string $title          The string to be sanitized.
 * @param string $fallback_title Optional. A title to use if $title is empty. Default empty.
 * @param string $context        Optional. The operation for which the string is sanitized.
 *                               Default 'save'.
 * @return string The sanitized string.
 */
function sanitize_title($title, $fallback_title = '', $context = 'save')
{
}