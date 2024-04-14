<?php


/**
 * This generates a CSS rule for the given border property and side if provided.
 * Based on whether the Search block is configured to display the button inside
 * or not, the generated rule is injected into the appropriate collection of
 * styles for later application in the block's markup.
 *
 * @param array  $attributes     The block attributes.
 * @param string $property       Border property to generate rule for e.g. width or color.
 * @param string $side           Optional side border. The dictates the value retrieved and final CSS property.
 * @param array  $wrapper_styles Current collection of wrapper styles.
 * @param array  $button_styles  Current collection of button styles.
 * @param array  $input_styles   Current collection of input styles.
 *
 * @return void
 * @phpstan-return void
 */
function apply_block_core_search_border_style($attributes, $property, $side, &$wrapper_styles, &$button_styles, &$input_styles)
{
}