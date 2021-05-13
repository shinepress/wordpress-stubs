<?php


/**
 * Retrieve a post's terms as a list with specified format.
 *
 * @since 2.5.0
 *
 * @param int    $id       Post ID.
 * @param string $taxonomy Taxonomy name.
 * @param string $before   Optional. Before list.
 * @param string $sep      Optional. Separate items using this.
 * @param string $after    Optional. After list.
 * @return string|false|WP_Error A list of terms on success, false if there are no terms, WP_Error on failure.
 */
function get_the_term_list($id, $taxonomy, $before = '', $sep = '', $after = '')
{
}