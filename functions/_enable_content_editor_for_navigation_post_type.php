<?php


/**
 * This callback enables content editor for wp_navigation type posts.
 * We need to enable it back because we disable it to hide
 * the content editor for wp_navigation type posts.
 *
 * @since 5.9.0
 * @access private
 *
 * @see _disable_content_editor_for_navigation_post_type
 *
 * @param WP_Post $post An instance of WP_Post class.
 */
function _enable_content_editor_for_navigation_post_type($post)
{
}