<?php


/**
 * Generates an inline style for a typography feature e.g. text decoration,
 * text transform, and font style.
 *
 * @since 5.8.0
 * @access private
 * @deprecated 6.1.0 Use wp_style_engine_get_styles() introduced in 6.1.0.
 *
 * @see wp_style_engine_get_styles()
 *
 * @param array  $attributes   Block's attributes.
 * @param string $feature      Key for the feature within the typography styles.
 * @param string $css_property Slug for the CSS property the inline style sets.
 * @return string CSS inline style.
 */
function wp_typography_get_css_variable_inline_style($attributes, $feature, $css_property)
{
}