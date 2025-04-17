<?php


/**
 * Processes the post data for the bulk editing of posts.
 *
 * Updates all bulk edited posts/pages, adding (but not removing) tags and
 * categories. Skips pages when they would be their own parent or child.
 *
 * @since 2.7.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param array|null $post_data Optional. The array of post data to process.
 *                              Defaults to the `$_POST` superglobal.
 * @return array {
 *     An array of updated, skipped, and locked post IDs.
 *
 *     @type int[] $updated An array of updated post IDs.
 *     @type int[] $skipped An array of skipped post IDs.
 *     @type int[] $locked  An array of locked post IDs.
 * }
 * @phpstan-return array{
 *   updated: int[],
 *   skipped: int[],
 *   locked: int[],
 * }
 */
function bulk_edit_posts($post_data = \null)
{
}