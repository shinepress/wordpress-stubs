<?php


/**
 * Builds the title and description of a post-specific template based on the underlying referenced post.
 *
 * Mutates the underlying template object.
 *
 * @since 6.1.0
 * @access private
 *
 * @param string            $post_type Post type, e.g. page, post, product.
 * @param string            $slug      Slug of the post, e.g. a-story-about-shoes.
 * @param WP_Block_Template $template  Template to mutate adding the description and title computed.
 * @return bool Returns true if the referenced post was found and false otherwise.
 */
function _wp_build_title_and_description_for_single_post_type_block_template($post_type, $slug, \WP_Block_Template $template)
{
}