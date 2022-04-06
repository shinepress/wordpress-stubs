<?php


/**
 * Generates the CSS corresponding to the provided layout.
 *
 * @since 5.9.0
 * @access private
 *
 * @param string $selector              CSS selector.
 * @param array  $layout                Layout object. The one that is passed has already checked
 *                                      the existence of default block layout.
 * @param bool   $has_block_gap_support Whether the theme has support for the block gap.
 * @param string $gap_value             The block gap value to apply.
 * @return string CSS style.
 */
function wp_get_layout_style($selector, $layout, $has_block_gap_support = \false, $gap_value = \null)
{
}