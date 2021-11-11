<?php


/**
 * Filter the SQL clauses of an attachment query to include filenames.
 *
 * @since 4.7.0
 * @access private
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string[] $clauses An array including WHERE, GROUP BY, JOIN, ORDER BY,
 *                          DISTINCT, fields (SELECT), and LIMITS clauses.
 * @return string[] The modified array of clauses.
 */
function _filter_query_attachment_filenames($clauses)
{
}