<?php


/**
 * Sanitizes the value of the Template Part block's `tagName` attribute.
 *
 * @since 6.5.5
 *
 * @param string         $attribute_value The attribute value to filter.
 * @param string         $attribute_name  The attribute name.
 * @param array[]|string $allowed_html    An array of allowed HTML elements and attributes,
 *                                        or a context name such as 'post'. See wp_kses_allowed_html()
 *                                        for the list of accepted context names.
 * @return string The sanitized attribute value.
 */
function filter_block_core_template_part_attributes($attribute_value, $attribute_name, $allowed_html)
{
}