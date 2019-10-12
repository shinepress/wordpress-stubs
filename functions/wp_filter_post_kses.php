<?php


/**
 * Sanitize content for allowed HTML tags for post content.
 *
 * Post content refers to the page contents of the 'post' type and not $_POST
 * data from forms.
 *
 * @since 2.0.0
 *
 * @param string $data Post content to filter, expected to be escaped with slashes
 * @return string Filtered post content with allowed HTML tags and attributes intact.
 */
function wp_filter_post_kses($data)
{
}