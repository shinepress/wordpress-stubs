<?php


/**
 * Overrides the context used in {@see wp_get_attachment_image()}. Internal use only.
 *
 * Uses the {@see 'begin_fetch_post_thumbnail_html'} and {@see 'end_fetch_post_thumbnail_html'}
 * action hooks to dynamically add/remove itself so as to only filter post thumbnails.
 *
 * @ignore
 * @since 6.3.0
 * @access private
 *
 * @param string $context The context for rendering an attachment image.
 * @return string Modified context set to 'the_post_thumbnail'.
 */
function _wp_post_thumbnail_context_filter($context)
{
}