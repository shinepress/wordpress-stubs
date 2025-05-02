<?php


/**
 * Helper function that constructs a WP_Query args array from
 * a `Query` block properties.
 *
 * It's used in Query Loop, Query Pagination Numbers and Query Pagination Next blocks.
 *
 * @since 5.8.0
 * @since 6.1.0 Added `query_loop_block_query_vars` filter and `parents` support in query.
 * @since 6.7.0 Added support for the `format` property in query.
 *
 * @param WP_Block $block Block instance.
 * @param int      $page  Current query's page.
 *
 * @return array Returns the constructed WP_Query arguments.
 */
function build_query_vars_from_query_block($block, $page)
{
}