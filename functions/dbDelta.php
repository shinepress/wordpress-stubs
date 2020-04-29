<?php


/**
 * Modifies the database based on specified SQL statements.
 *
 * Useful for creating new tables and updating existing tables to a new structure.
 *
 * @since 1.5.0
 *
 * @global wpdb  $wpdb
 *
 * @param string[]|string $queries Optional. The query to run. Can be multiple queries
 *                                 in an array, or a string of queries separated by
 *                                 semicolons. Default empty string.
 * @param bool            $execute Optional. Whether or not to execute the query right away.
 *                                 Default true.
 * @return array Strings containing the results of the various update queries.
 */
function dbDelta($queries = '', $execute = \true)
{
}