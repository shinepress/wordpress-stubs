<?php


/**
 * Retrieves post categories.
 *
 * This tag may be used outside The Loop by passing a post ID as the parameter.
 *
 * Note: This function only returns results from the default "category" taxonomy.
 * For custom taxonomies use get_the_terms().
 *
 * @since 0.71
 *
 * @param int $post_id Optional. The post ID. Defaults to current post ID.
 * @return WP_Term[] Array of WP_Term objects, one for each category assigned to the post.
 */
function get_the_category($post_id = \false)
{
}