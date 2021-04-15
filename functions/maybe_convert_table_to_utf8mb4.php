<?php


/**
 * If a table only contains utf8 or utf8mb4 columns, convert it to utf8mb4.
 *
 * @since 4.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $table The table to convert.
 * @return bool True if the table was converted, false if it wasn't.
 */
function maybe_convert_table_to_utf8mb4($table)
{
}