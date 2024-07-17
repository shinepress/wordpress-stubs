<?php


/**
 * Generates the CSS corresponding to the provided layout.
 *
 * @since 5.9.0
 * @access private
 *
 * @param string  $selector                      CSS selector.
 * @param array   $layout                        Layout object. The one that is passed has already checked
 *                                               the existence of default block layout.
 * @param boolean $has_block_gap_support         Whether the theme has support for the block gap.
 * @param string  $gap_value                     The block gap value to apply.
 * @param boolean $should_skip_gap_serialization Whether to skip applying the user-defined value set in the editor.
 * @param string  $fallback_gap_value            The custom fallback value for block gap.
 * @return string CSS style.
 */
function wp_get_layout_style($selector, $layout, $has_block_gap_support = \false, $gap_value = \null, $should_skip_gap_serialization = \false, $fallback_gap_value = '0.5em')
{
}