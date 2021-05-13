<?php


/**
 * Registers a meta key for posts.
 *
 * @since 4.9.8
 *
 * @param string $post_type Post type to register a meta key for. Pass an empty string
 *                          to register the meta key across all existing post types.
 * @param string $meta_key  The meta key to register.
 * @param array  $args      Data used to describe the meta key when registered. See
 *                          {@see register_meta()} for a list of supported arguments.
 * @return bool True if the meta key was successfully registered, false if not.
 */
function register_post_meta($post_type, $meta_key, array $args)
{
}