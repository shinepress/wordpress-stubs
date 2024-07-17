<?php


/**
 * This is a specific fix for the REST API. The REST API doesn't update
 * the post and post meta in one go (through `meta_input`). While it
 * does fix the `wp_after_insert_post` hook to be called correctly after
 * updating meta, it does NOT fix hooks such as post_updated and
 * save_post, which are normally also fired after post meta is updated
 * in `wp_insert_post()`. Unfortunately, `wp_save_post_revision` is
 * added to the `post_updated` action, which means the meta is not
 * available at the time, so we have to add it afterwards through the
 * `"rest_after_insert_{$post_type}"` action.
 *
 * @since 6.3.0
 *
 * @global int $wp_temporary_footnote_revision_id The footnote revision ID.
 *
 * @param WP_Post $post The post object.
 * @phpstan-return void
 */
function wp_add_footnotes_revisions_to_post_meta($post)
{
}