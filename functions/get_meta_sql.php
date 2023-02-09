<?php


/**
 * Given a meta query, generates SQL clauses to be appended to a main query.
 *
 * @since 3.2.0
 *
 * @see WP_Meta_Query
 *
 * @param array  $meta_query        A meta query.
 * @param string $type              Type of meta.
 * @param string $primary_table     Primary database table name.
 * @param string $primary_id_column Primary ID column name.
 * @param object $context           Optional. The main query object
 * @return string[]|false {
 *     Array containing JOIN and WHERE SQL clauses to append to the main query,
 *     or false if no table exists for the requested meta type.
 *
 *     @type string $join  SQL fragment to append to the main JOIN clause.
 *     @type string $where SQL fragment to append to the main WHERE clause.
 * }
 * @phpstan-return false|array{
 *   join: string,
 *   where: string,
 * }
 */
function get_meta_sql($meta_query, $type, $primary_table, $primary_id_column, $context = \null)
{
}