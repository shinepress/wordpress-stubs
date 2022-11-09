<?php


/**
 * Updates the cache for the given term object ID(s).
 *
 * Note: Due to performance concerns, great care should be taken to only update
 * term caches when necessary. Processing time can increase exponentially depending
 * on both the number of passed term IDs and the number of taxonomies those terms
 * belong to.
 *
 * Caches will only be updated for terms not already cached.
 *
 * @since 2.3.0
 *
 * @param string|array $object_ids  Comma-separated list or array of term object IDs.
 * @param array|string $object_type The taxonomy object type.
 * @return void|false False if all of the terms in `$object_ids` are already cached.
 */
function update_object_term_cache($object_ids, $object_type)
{
}