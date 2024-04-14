<?php


/**
 * Render the elements stylesheet.
 *
 * In the case of nested blocks we want the parent element styles to be rendered before their descendants.
 * This solves the issue of an element (e.g.: link color) being styled in both the parent and a descendant:
 * we want the descendant style to take priority, and this is done by loading it after, in DOM order.
 *
 * @since 6.0.0
 * @access private
 *
 * @param string|null $pre_render   The pre-rendered content. Default null.
 * @param array       $block        The block being rendered.
 *
 * @return null
 */
function wp_render_elements_support_styles($pre_render, $block)
{
}