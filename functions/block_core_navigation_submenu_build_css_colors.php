<?php


/**
 * Build an array with CSS classes and inline styles defining the colors
 * which will be applied to the navigation markup in the front-end.
 *
 * @since 5.9.0
 * @deprecated 6.3.0 This was removed from the Navigation Submenu block in favour of `wp_apply_colors_support()`.
 *                   `wp_apply_colors_support()` returns an array with similar class and style values,
 *                   but with different keys: `class` and `style`.
 *
 * @param  array $context     Navigation block context.
 * @param  array $attributes  Block attributes.
 * @param  bool  $is_sub_menu Whether the block is a sub-menu.
 * @return array Colors CSS classes and inline styles.
 */
function block_core_navigation_submenu_build_css_colors($context, $attributes, $is_sub_menu = \false)
{
}