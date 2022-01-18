<?php


/**
 * Outputs hidden input HTML for replying to comments.
 *
 * Adds two hidden inputs to the comment form to identify the `comment_post_ID`
 * and `comment_parent` values for threaded comments.
 *
 * This tag must be within the `<form>` section of the `comments.php` template.
 *
 * @since 2.7.0
 *
 * @see get_comment_id_fields()
 *
 * @param int $post_id Optional. Post ID. Defaults to the current post ID.
 */
function comment_id_fields($post_id = 0)
{
}