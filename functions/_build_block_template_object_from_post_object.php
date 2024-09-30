<?php


/**
 * Builds a block template object from a post object.
 *
 * This is a helper function that creates a block template object from a given post object.
 * It is self-sufficient in that it only uses information passed as arguments; it does not
 * query the database for additional information.
 *
 * @since 6.5.3
 * @access private
 *
 * @param WP_Post $post  Template post.
 * @param array   $terms Additional terms to inform the template object.
 * @param array   $meta  Additional meta fields to inform the template object.
 * @return WP_Block_Template|WP_Error Template or error object.
 */
function _build_block_template_object_from_post_object($post, $terms = array(), $meta = array())
{
}