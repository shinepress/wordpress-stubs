<?php


/**
 * Add CSS classes and inline styles for shadow features to the incoming attributes array.
 * This will be applied to the block markup in the front-end.
 *
 * @since 6.3.0
 * @since 6.6.0 Return early if __experimentalSkipSerialization is true.
 * @access private
 *
 * @param  WP_Block_Type $block_type       Block type.
 * @param  array         $block_attributes Block attributes.
 * @return array Shadow CSS classes and inline styles.
 */
function wp_apply_shadow_support($block_type, $block_attributes)
{
}