<?php


/**
 * This function takes care of adding inline styles
 * in the proper place, depending on the theme in use.
 *
 * @since 5.9.1
 *
 * For block themes, it's loaded in the head.
 * For classic ones, it's loaded in the body
 * because the wp_head action happens before
 * the render_block.
 *
 * @link https://core.trac.wordpress.org/ticket/53494.
 *
 * @param string $style String containing the CSS styles to be added.
 */
function wp_enqueue_block_support_styles($style)
{
}