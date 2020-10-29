<?php


/**
 * Updates the database tables to a new schema.
 *
 * By default, updates all the tables to use the latest defined schema, but can also
 * be used to update a specific set of tables in wp_get_db_schema().
 *
 * @since 1.5.0
 *
 * @uses dbDelta
 *
 * @param string $tables Optional. Which set of tables to update. Default is 'all'.
 */
function make_db_current($tables = 'all')
{
}