<?php


/**
 * Updates metadata cache for list of term IDs.
 *
 * Performs SQL query to retrieve all metadata for the terms matching `$term_ids` and stores them in the cache.
 * Subsequent calls to `get_term_meta()` will not need to query the database.
 *
 * @since 4.4.0
 *
 * @param array $term_ids List of term IDs.
 * @return array|false An array of metadata on success, false if there is nothing to update.
 */
function update_termmeta_cache($term_ids)
{
}