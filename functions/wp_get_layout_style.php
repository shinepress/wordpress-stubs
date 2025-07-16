<?php


/**
 * Generates the CSS corresponding to the provided layout.
 *
 * @since 5.9.0
 * @since 6.1.0 Added `$block_spacing` param, use style engine to enqueue styles.
 * @since 6.3.0 Added grid layout type.
 * @since 6.6.0 Removed duplicated selector from layout styles.
 *              Enabled negative margins for alignfull children of blocks with custom padding.
 * @access private
 *
 * @param string               $selector                      CSS selector.
 * @param array                $layout                        Layout object. The one that is passed has already checked
 *                                                            the existence of default block layout.
 * @param bool                 $has_block_gap_support         Optional. Whether the theme has support for the block gap. Default false.
 * @param string|string[]|null $gap_value                     Optional. The block gap value to apply. Default null.
 * @param bool                 $should_skip_gap_serialization Optional. Whether to skip applying the user-defined value set in the editor. Default false.
 * @param string               $fallback_gap_value            Optional. The block gap value to apply. Default '0.5em'.
 * @param array|null           $block_spacing                 Optional. Custom spacing set on the block. Default null.
 * @return string CSS styles on success. Else, empty string.
 */
function wp_get_layout_style($selector, $layout, $has_block_gap_support = \false, $gap_value = \null, $should_skip_gap_serialization = \false, $fallback_gap_value = '0.5em', $block_spacing = \null)
{
}