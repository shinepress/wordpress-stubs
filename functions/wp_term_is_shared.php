<?php


/**
 * Determine whether a term is shared between multiple taxonomies.
 *
 * Shared taxonomy terms began to be split in 4.3, but failed cron tasks or
 * other delays in upgrade routines may cause shared terms to remain.
 *
 * @since 4.4.0
 *
 * @param int $term_id
 * @return bool
 */
function wp_term_is_shared($term_id)
{
}