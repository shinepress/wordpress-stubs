<?php


/**
 * Update an existing post with values provided in $_POST.
 *
 * If post data is passed as an argument, it is treated as an array of data
 * keyed appropriately for turning into a post object.
 *
 * If post data is not passed, the $_POST global variable is used instead.
 *
 * @since 1.5.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array $post_data Optional. Defaults to the $_POST global.
 * @return int Post ID.
 */
function edit_post($post_data = \null)
{
}