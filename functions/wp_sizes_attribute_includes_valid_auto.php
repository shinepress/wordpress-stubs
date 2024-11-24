<?php


/**
 * Checks whether the given 'sizes' attribute includes the 'auto' keyword as the first item in the list.
 *
 * Per the HTML spec, if present it must be the first entry.
 *
 * @since 6.7.0
 *
 * @param string $sizes_attr The 'sizes' attribute value.
 * @return bool True if the 'auto' keyword is present, false otherwise.
 */
function wp_sizes_attribute_includes_valid_auto(string $sizes_attr): bool
{
}