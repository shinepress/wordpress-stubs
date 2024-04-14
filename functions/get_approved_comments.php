<?php


/**
 * Retrieve the approved comments for post $post_id.
 *
 * @since 2.0.0
 * @since 4.1.0 Refactored to leverage WP_Comment_Query over a direct query.
 *
 * @param int   $post_id The ID of the post.
 * @param array $args    Optional. See WP_Comment_Query::__construct() for information on accepted arguments.
 * @return int|array The approved comments, or number of comments if `$count`
 *                   argument is true.
 * @phpstan-param array{
 *   author_email?: string,
 *   author_url?: string,
 *   author__in?: int[],
 *   author__not_in?: int[],
 *   comment__in?: int[],
 *   comment__not_in?: int[],
 *   count?: bool,
 *   date_query?: array,
 *   fields?: string,
 *   ID?: int,
 *   include_unapproved?: array,
 *   karma?: int,
 *   meta_key?: string,
 *   meta_value?: string,
 *   meta_query?: array,
 *   number?: int,
 *   paged?: int,
 *   offset?: int,
 *   no_found_rows?: bool,
 *   orderby?: string|array,
 *   order?: string,
 *   parent?: int,
 *   parent__in?: int[],
 *   parent__not_in?: int[],
 *   post_author__in?: int[],
 *   post_author__not_in?: int[],
 *   post_ID?: int,
 *   post_id?: int,
 *   post__in?: int[],
 *   post__not_in?: int[],
 *   post_author?: int,
 *   post_status?: string|array,
 *   post_type?: string,
 *   post_name?: string,
 *   post_parent?: int,
 *   search?: string,
 *   status?: string|array,
 *   type?: string|array,
 *   type__in?: string[],
 *   type__not_in?: string[],
 *   user_id?: int,
 *   hierarchical?: bool|string,
 *   cache_domain?: string,
 *   update_comment_meta_cache?: bool,
 *   update_comment_post_cache?: bool,
 * } $args See WP_Comment_Query::__construct()
 */
function get_approved_comments($post_id, $args = array())
{
}