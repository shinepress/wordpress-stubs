<?php


/**
 * Register support of certain features for a post type.
 *
 * All core features are directly associated with a functional area of the edit
 * screen, such as the editor or a meta box. Features include: 'title', 'editor',
 * 'comments', 'revisions', 'trackbacks', 'author', 'excerpt', 'page-attributes',
 * 'thumbnail', 'custom-fields', and 'post-formats'.
 *
 * Additionally, the 'revisions' feature dictates whether the post type will
 * store revisions, and the 'comments' feature dictates whether the comments
 * count will show on the edit screen.
 *
 * @since 3.0.0
 *
 * @global array $_wp_post_type_features
 *
 * @param string       $post_type The post type for which to add the feature.
 * @param string|array $feature   The feature being added, accepts an array of
 *                                feature strings or a single string.
 */
function add_post_type_support($post_type, $feature)
{
}