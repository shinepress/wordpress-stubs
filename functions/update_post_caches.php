<?php


/**
 * Updates post, term, and metadata caches for a list of post objects.
 *
 * @since 1.5.0
 *
 * @param WP_Post[] $posts             Array of post objects (passed by reference).
 * @param string    $post_type         Optional. Post type. Default 'post'.
 * @param bool      $update_term_cache Optional. Whether to update the term cache. Default true.
 * @param bool      $update_meta_cache Optional. Whether to update the meta cache. Default true.
 */
function update_post_caches(&$posts, $post_type = 'post', $update_term_cache = \true, $update_meta_cache = \true)
{
}