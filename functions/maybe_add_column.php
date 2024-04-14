<?php


/**
 * Adds column to a database table if it doesn't already exist.
 *
 * @since 1.3.0
 *
 * @global wpdb  $wpdb
 *
 * @param string $table_name  The table name to modify.
 * @param string $column_name The column name to add to the table.
 * @param string $create_ddl  The SQL statement used to add the column.
 * @return bool True if already exists or on successful completion, false on error.
 */
function maybe_add_column($table_name, $column_name, $create_ddl)
{
}