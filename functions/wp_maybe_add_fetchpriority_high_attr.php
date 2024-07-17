<?php


/**
 * Determines whether to add `fetchpriority='high'` to loading attributes.
 *
 * @since 6.3.0
 * @access private
 *
 * @param array  $loading_attrs Array of the loading optimization attributes for the element.
 * @param string $tag_name      The tag name.
 * @param array  $attr          Array of the attributes for the element.
 * @return array Updated loading optimization attributes for the element.
 */
function wp_maybe_add_fetchpriority_high_attr($loading_attrs, $tag_name, $attr)
{
}