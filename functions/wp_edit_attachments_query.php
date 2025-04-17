<?php


/**
 * Executes a query for attachments. An array of WP_Query arguments
 * can be passed in, which will override the arguments set by this function.
 *
 * @since 2.5.0
 *
 * @param array|false $q Optional. Array of query variables to use to build the query.
 *                       Defaults to the `$_GET` superglobal.
 * @return array {
 *     Array containing the post mime types and available post mime types.
 *
 *     @type array[]  $post_mime_types       Post mime types.
 *     @type string[] $avail_post_mime_types Available post mime types.
 * }
 * @phpstan-return array{
 *   post_mime_types: array[],
 *   avail_post_mime_types: string[],
 * }
 */
function wp_edit_attachments_query($q = \false)
{
}