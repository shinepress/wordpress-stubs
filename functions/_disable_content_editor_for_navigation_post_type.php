<?php


/**
 * This callback disables the content editor for wp_navigation type posts.
 * Content editor cannot handle wp_navigation type posts correctly.
 * We cannot disable the "editor" feature in the wp_navigation's CPT definition
 * because it disables the ability to save navigation blocks via REST API.
 *
 * @since 5.9.0
 * @access private
 *
 * @param WP_Post $post An instance of WP_Post class.
 * @phpstan-return void
 */
function _disable_content_editor_for_navigation_post_type($post)
{
}