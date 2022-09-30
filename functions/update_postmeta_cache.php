<?php


/**
 * Updates metadata cache for list of post IDs.
 *
 * Performs SQL query to retrieve the metadata for the post IDs and updates the
 * metadata cache for the posts. Therefore, the functions, which call this
 * function, do not need to perform SQL queries on their own.
 *
 * @since 2.1.0
 *
 * @param int[] $post_ids Array of post IDs.
 * @return array|false Returns false if there is nothing to update or an array
 *                     of metadata.
 */
function update_postmeta_cache($post_ids)
{
}