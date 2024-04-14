<?php


/**
 * Post revision functions.
 *
 * @package WordPress
 * @subpackage Post_Revisions
 */
/**
 * Determines which fields of posts are to be saved in revisions.
 *
 * @since 2.6.0
 * @since 4.5.0 A `WP_Post` object can now be passed to the `$post` parameter.
 * @since 4.5.0 The optional `$autosave` parameter was deprecated and renamed to `$deprecated`.
 * @access private
 *
 * @param array|WP_Post $post       Optional. A post array or a WP_Post object being processed
 *                                  for insertion as a post revision. Default empty array.
 * @param bool          $deprecated Not used.
 * @return string[] Array of fields that can be versioned.
 */
function _wp_post_revision_fields($post = array(), $deprecated = \false)
{
}