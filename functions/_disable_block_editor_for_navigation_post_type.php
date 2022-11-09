<?php


/**
 * Disables block editor for wp_navigation type posts so they can be managed via the UI.
 *
 * @since 5.9.0
 * @access private
 *
 * @param bool   $value Whether the CPT supports block editor or not.
 * @param string $post_type Post type.
 * @return bool Whether the block editor should be disabled or not.
 */
function _disable_block_editor_for_navigation_post_type($value, $post_type)
{
}