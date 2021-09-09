<?php


/**
 * Core User Role & Capabilities API
 *
 * @package WordPress
 * @subpackage Users
 */
/**
 * Maps meta capabilities to primitive capabilities.
 *
 * This function also accepts an ID of an object to map against if the capability is a meta capability. Meta
 * capabilities such as `edit_post` and `edit_user` are capabilities used by this function to map to primitive
 * capabilities that a user or role has, such as `edit_posts` and `edit_others_posts`.
 *
 * Example usage:
 *
 *     map_meta_cap( 'edit_posts', $user->ID );
 *     map_meta_cap( 'edit_post', $user->ID, $post->ID );
 *     map_meta_cap( 'edit_post_meta', $user->ID, $post->ID, $meta_key );
 *
 * This does not actually compare whether the user ID has the actual capability,
 * just what the capability or capabilities are. Meta capability list value can
 * be 'delete_user', 'edit_user', 'remove_user', 'promote_user', 'delete_post',
 * 'delete_page', 'edit_post', 'edit_page', 'read_post', or 'read_page'.
 *
 * @since 2.0.0
 * @since 5.3.0 Formalized the existing and already documented `...$args` parameter
 *              by adding it to the function signature.
 *
 * @global array $post_type_meta_caps Used to get post type meta capabilities.
 *
 * @param string $cap     Capability name.
 * @param int    $user_id User ID.
 * @param mixed  ...$args Optional further parameters, typically starting with an object ID.
 * @return string[] Actual capabilities for meta capability.
 */
function map_meta_cap($cap, $user_id, ...$args)
{
}