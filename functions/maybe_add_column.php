<?php


/**
 * Adds column to a database table, if it doesn't already exist.
 *
 * @since 1.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $table_name  Database table name.
 * @param string $column_name Table column name.
 * @param string $create_ddl  SQL statement to add column.
 * @return bool True on success or if the column already exists. False on failure.
 */
function maybe_add_column($table_name, $column_name, $create_ddl)
{
}