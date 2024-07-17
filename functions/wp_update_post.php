<?php


/**
 * Updates a post with new post data.
 *
 * The date does not have to be set for drafts. You can set the date and it will
 * not be overridden.
 *
 * @since 1.0.0
 * @since 3.5.0 Added the `$wp_error` parameter to allow a WP_Error to be returned on failure.
 * @since 5.6.0 Added the `$fire_after_hooks` parameter.
 *
 * @param array|object $postarr          Optional. Post data. Arrays are expected to be escaped,
 *                                       objects are not. See wp_insert_post() for accepted arguments.
 *                                       Default array.
 * @param bool         $wp_error         Optional. Whether to return a WP_Error on failure. Default false.
 * @param bool         $fire_after_hooks Optional. Whether to fire the after insert hooks. Default true.
 * @return int|WP_Error The post ID on success. The value 0 or WP_Error on failure.
 * @phpstan-param array{
 *   ID?: int,
 *   post_author?: int,
 *   post_date?: string,
 *   post_date_gmt?: string,
 *   post_content?: string,
 *   post_content_filtered?: string,
 *   post_title?: string,
 *   post_excerpt?: string,
 *   post_status?: string,
 *   post_type?: string,
 *   comment_status?: string,
 *   ping_status?: string,
 *   post_password?: string,
 *   post_name?: string,
 *   to_ping?: string,
 *   pinged?: string,
 *   post_parent?: int,
 *   menu_order?: int,
 *   post_mime_type?: string,
 *   guid?: string,
 *   import_id?: int,
 *   post_category?: int[],
 *   tags_input?: array,
 *   tax_input?: array,
 *   meta_input?: array,
 *   page_template?: string,
 * } $postarr See wp_insert_post()
 * @phpstan-return ($wp_error is false ? 0|positive-int : positive-int|\WP_Error)
 */
function wp_update_post($postarr = array(), $wp_error = \false, $fire_after_hooks = \true)
{
}