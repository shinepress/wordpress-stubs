<?php


/**
 * Returns a font-size value based on a given font-size preset.
 * Takes into account fluid typography parameters and attempts to return a CSS
 * formula depending on available, valid values.
 *
 * @since 6.1.0
 *
 * @param array $preset                     {
 *     Required. fontSizes preset value as seen in theme.json.
 *
 *     @type string           $name Name of the font size preset.
 *     @type string           $slug Kebab-case, unique identifier for the font size preset.
 *     @type string|int|float $size CSS font-size value, including units if applicable.
 * }
 * @param bool  $should_use_fluid_typography An override to switch fluid typography "on". Can be used for unit testing.
 *                                           Default is false.
 * @return string|null Font-size value or null if a size is not passed in $preset.
 * @phpstan-param array{
 *   name?: string,
 *   slug?: string,
 *   size?: string|int|float,
 * } $preset
 */
function wp_get_typography_font_size_value($preset, $should_use_fluid_typography = \false)
{
}