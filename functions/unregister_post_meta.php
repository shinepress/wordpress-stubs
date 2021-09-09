<?php


/**
 * Unregisters a meta key for posts.
 *
 * @since 4.9.8
 *
 * @param string $post_type Post type the meta key is currently registered for. Pass
 *                          an empty string if the meta key is registered across all
 *                          existing post types.
 * @param string $meta_key  The meta key to unregister.
 * @return bool True on success, false if the meta key was not previously registered.
 */
function unregister_post_meta($post_type, $meta_key)
{
}