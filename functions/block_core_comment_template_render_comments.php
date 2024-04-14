<?php


/**
 * Server-side rendering of the `core/comment-template` block.
 *
 * @package WordPress
 */
/**
 * Function that recursively renders a list of nested comments.
 *
 * @since 6.3.0 Changed render_block_context priority to `1`.
 *
 * @global int $comment_depth
 *
 * @param WP_Comment[] $comments        The array of comments.
 * @param WP_Block     $block           Block instance.
 * @return string
 */
function block_core_comment_template_render_comments($comments, $block)
{
}