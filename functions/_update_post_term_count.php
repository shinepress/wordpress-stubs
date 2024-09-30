<?php


/**
 * Updates term count based on object types of the current taxonomy.
 *
 * Private function for the default callback for post_tag and category
 * taxonomies.
 *
 * @access private
 * @since 2.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param int[]       $terms    List of term taxonomy IDs.
 * @param WP_Taxonomy $taxonomy Current taxonomy object of terms.
 */
function _update_post_term_count($terms, $taxonomy)
{
}