<?php


/**
 * Gets data about terms that previously shared a single term_id, but have since been split.
 *
 * @since 4.2.0
 *
 * @param int $old_term_id Term ID. This is the old, pre-split term ID.
 * @return array Array of new term IDs, keyed by taxonomy.
 */
function wp_get_split_terms($old_term_id)
{
}