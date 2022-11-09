<?php


/**
 * Retrieve the approved comments for post $post_id.
 *
 * @since 2.0.0
 * @since 4.1.0 Refactored to leverage WP_Comment_Query over a direct query.
 *
 * @param  int   $post_id The ID of the post.
 * @param  array $args    Optional. See WP_Comment_Query::__construct() for information on accepted arguments.
 * @return int|array $comments The approved comments, or number of comments if `$count`
 *                             argument is true.
 * @phpstan-param array{
 *   author_email?: string,
 *   author_url?: string,
 *   author__in?: array,
 *   author__not_in?: array,
 *   comment__in?: array,
 *   comment__not_in?: array,
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
 *   parent__in?: array,
 *   parent__not_in?: array,
 *   post_author__in?: array,
 *   post_author__not_in?: array,
 *   post_ID?: int,
 *   post_id?: int,
 *   post__in?: array,
 *   post__not_in?: array,
 *   post_author?: int,
 *   post_status?: string|array,
 *   post_type?: string,
 *   post_name?: string,
 *   post_parent?: int,
 *   search?: string,
 *   status?: string,
 *   type?: string|array,
 *   type__in?: array,
 *   type__not_in?: array,
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