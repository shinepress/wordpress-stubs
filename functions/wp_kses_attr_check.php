<?php


/**
 * Determine whether an attribute is allowed.
 *
 * @since 4.2.3
 *
 * @param string $name The attribute name. Returns empty string when not allowed.
 * @param string $value The attribute value. Returns a filtered value.
 * @param string $whole The name=value input. Returns filtered input.
 * @param string $vless 'y' when attribute like "enabled", otherwise 'n'.
 * @param string $element The name of the element to which this attribute belongs.
 * @param array $allowed_html The full list of allowed elements and attributes.
 * @return bool Is the attribute allowed?
 */
function wp_kses_attr_check(&$name, &$value, &$whole, $vless, $element, $allowed_html)
{
}