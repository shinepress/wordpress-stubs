<?php


/**
 * Parses hex, hsl, and rgb CSS strings using the same regex as TinyColor v1.4.2
 * used in the JavaScript. Only colors output from react-color are implemented
 * and the alpha value is ignored as it is not used in duotone.
 *
 * Direct port of TinyColor's function, lightly simplified to maintain
 * consistency with TinyColor.
 *
 * @see https://github.com/bgrins/TinyColor
 * @see https://github.com/casesandberg/react-color/
 *
 * @since 5.8.0
 * @access private
 *
 * @param string $color_str CSS color string.
 *
 * @return array RGB object.
 */
function wp_tinycolor_string_to_rgb($color_str)
{
}