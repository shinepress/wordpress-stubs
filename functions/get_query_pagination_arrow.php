<?php


/**
 * Helper function that returns the proper pagination arrow html for
 * `QueryPaginationNext` and `QueryPaginationPrevious` blocks based
 * on the provided `paginationArrow` from `QueryPagination` context.
 *
 * It's used in QueryPaginationNext and QueryPaginationPrevious blocks.
 *
 * @since 5.9.0
 *
 * @param WP_Block $block   Block instance.
 * @param boolean  $is_next Flag for hanlding `next/previous` blocks.
 *
 * @return string|null Returns the constructed WP_Query arguments.
 */
function get_query_pagination_arrow($block, $is_next)
{
}