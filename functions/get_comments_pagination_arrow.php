<?php


/**
 * Helper function that returns the proper pagination arrow HTML for
 * `CommentsPaginationNext` and `CommentsPaginationPrevious` blocks based on the
 * provided `paginationArrow` from `CommentsPagination` context.
 *
 * It's used in CommentsPaginationNext and CommentsPaginationPrevious blocks.
 *
 * @since 6.0.0
 *
 * @param WP_Block $block           Block instance.
 * @param string   $pagination_type Type of the arrow we will be rendering.
 *                                  Default 'next'. Accepts 'next' or 'previous'.
 *
 * @return string|null The pagination arrow HTML or null if there is none.
 * @phpstan-param 'next'|'previous' $pagination_type
 */
function get_comments_pagination_arrow($block, $pagination_type = 'next')
{
}