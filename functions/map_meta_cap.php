<?php


/**
 * Core User Role & Capabilities API
 *
 * @package WordPress
 * @subpackage Users
 */
/**
 * Map meta capabilities to primitive capabilities.
 *
 * This does not actually compare whether the user ID has the actual capability,
 * just what the capability or capabilities are. Meta capability list value can
 * be 'delete_user', 'edit_user', 'remove_user', 'promote_user', 'delete_post',
 * 'delete_page', 'edit_post', 'edit_page', 'read_post', or 'read_page'.
 *
 * @since 2.0.0
 *
 * @global array $post_type_meta_caps Used to get post type meta capabilities.
 *
 * @param string $cap       Capability name.
 * @param int    $user_id   User ID.
 * @param int    $object_id Optional. ID of the specific object to check against if `$cap` is a "meta" cap.
 *                          "Meta" capabilities, e.g. 'edit_post', 'edit_user', etc., are capabilities used
 *                          by map_meta_cap() to map to other "primitive" capabilities, e.g. 'edit_posts',
 *                          'edit_others_posts', etc. The parameter is accessed via func_get_args().
 * @return array Actual capabilities for meta capability.
 */
function map_meta_cap($cap, $user_id)
{
}