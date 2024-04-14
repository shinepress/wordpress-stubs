<?php


/**
 * Check content for video and audio links to add as enclosures.
 *
 * Will not add enclosures that have already been added and will
 * remove enclosures that are no longer in the post. This is called as
 * pingbacks and trackbacks.
 *
 * @since 1.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $content Post Content.
 * @param int    $post_ID Post ID.
 */
function do_enclose($content, $post_ID)
{
}