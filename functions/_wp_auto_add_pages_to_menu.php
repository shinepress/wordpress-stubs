<?php


/**
 * Automatically add newly published page objects to menus with that as an option.
 *
 * @since 3.0.0
 * @access private
 *
 * @param string  $new_status The new status of the post object.
 * @param string  $old_status The old status of the post object.
 * @param WP_Post $post       The post object being transitioned from one status to another.
 * @phpstan-return void
 */
function _wp_auto_add_pages_to_menu($new_status, $old_status, $post)
{
}