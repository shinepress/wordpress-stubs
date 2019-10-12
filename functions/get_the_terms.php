<?php


/**
 * Retrieve the terms of the taxonomy that are attached to the post.
 *
 * @since 2.5.0
 *
 * @param int|object $post Post ID or object.
 * @param string $taxonomy Taxonomy name.
 * @return array|false|WP_Error Array of WP_Term objects on success, false if there are no terms
 *                              or the post does not exist, WP_Error on failure.
 */
function get_the_terms($post, $taxonomy)
{
}