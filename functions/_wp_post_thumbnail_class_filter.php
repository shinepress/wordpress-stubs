<?php


/**
 * Adds a 'wp-post-image' class to post thumbnails. Internal use only.
 *
 * Uses the {@see 'begin_fetch_post_thumbnail_html'} and {@see 'end_fetch_post_thumbnail_html'}
 * action hooks to dynamically add/remove itself so as to only filter post thumbnails.
 *
 * @ignore
 * @since 2.9.0
 *
 * @param string[] $attr Array of thumbnail attributes including src, class, alt, title, keyed by attribute name.
 * @return string[] Modified array of attributes including the new 'wp-post-image' class.
 */
function _wp_post_thumbnail_class_filter($attr)
{
}