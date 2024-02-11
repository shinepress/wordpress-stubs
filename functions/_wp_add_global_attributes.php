<?php


/**
 * Helper function to add global attributes to a tag in the allowed HTML list.
 *
 * @since 3.5.0
 * @since 5.0.0 Added support for `data-*` wildcard attributes.
 * @since 6.0.0 Added `dir`, `lang`, and `xml:lang` to global attributes.
 * @since 6.3.0 Added `aria-controls`, `aria-current`, and `aria-expanded` attributes.
 * @since 6.4.0 Added `aria-live` and `hidden` attributes.
 *
 * @access private
 * @ignore
 *
 * @param array $value An array of attributes.
 * @return array The array of attributes with global attributes added.
 */
function _wp_add_global_attributes($value)
{
}