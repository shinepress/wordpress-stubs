<?php


/**
 * Updates the wp_postmeta with the list of ignored hooked blocks
 * where the inner blocks are stored as post content.
 *
 * @since 6.6.0
 * @since 6.8.0 Support non-`wp_navigation` post types.
 * @access private
 *
 * @param stdClass $post Post object.
 * @return stdClass The updated post object.
 */
function update_ignored_hooked_blocks_postmeta($post)
{
}