<?php


/**
 * Creates dropdown HTML content of users.
 *
 * The content can either be displayed, which it is by default or retrieved by
 * setting the 'echo' argument. The 'include' and 'exclude' arguments do not
 * need to be used; all users will be displayed in that case. Only one can be
 * used, either 'include' or 'exclude', but not both.
 *
 * The available arguments are as follows:
 *
 * @since 2.3.0
 * @since 4.5.0 Added the 'display_name_with_login' value for 'show'.
 * @since 4.7.0 Added the `$role`, `$role__in`, and `$role__not_in` parameters.
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments to generate a drop-down of users.
 *     See WP_User_Query::prepare_query() for additional available arguments.
 *
 *     @type string       $show_option_all         Text to show as the drop-down default (all).
 *                                                 Default empty.
 *     @type string       $show_option_none        Text to show as the drop-down default when no
 *                                                 users were found. Default empty.
 *     @type int|string   $option_none_value       Value to use for $show_option_non when no users
 *                                                 were found. Default -1.
 *     @type string       $hide_if_only_one_author Whether to skip generating the drop-down
 *                                                 if only one user was found. Default empty.
 *     @type string       $orderby                 Field to order found users by. Accepts user fields.
 *                                                 Default 'display_name'.
 *     @type string       $order                   Whether to order users in ascending or descending
 *                                                 order. Accepts 'ASC' (ascending) or 'DESC' (descending).
 *                                                 Default 'ASC'.
 *     @type int[]|string $include                 Array or comma-separated list of user IDs to include.
 *                                                 Default empty.
 *     @type int[]|string $exclude                 Array or comma-separated list of user IDs to exclude.
 *                                                 Default empty.
 *     @type bool|int     $multi                   Whether to skip the ID attribute on the 'select' element.
 *                                                 Accepts 1|true or 0|false. Default 0|false.
 *     @type string       $show                    User data to display. If the selected item is empty
 *                                                 then the 'user_login' will be displayed in parentheses.
 *                                                 Accepts any user field, or 'display_name_with_login' to show
 *                                                 the display name with user_login in parentheses.
 *                                                 Default 'display_name'.
 *     @type int|bool     $echo                    Whether to echo or return the drop-down. Accepts 1|true (echo)
 *                                                 or 0|false (return). Default 1|true.
 *     @type int          $selected                Which user ID should be selected. Default 0.
 *     @type bool         $include_selected        Whether to always include the selected user ID in the drop-
 *                                                 down. Default false.
 *     @type string       $name                    Name attribute of select element. Default 'user'.
 *     @type string       $id                      ID attribute of the select element. Default is the value of $name.
 *     @type string       $class                   Class attribute of the select element. Default empty.
 *     @type int          $blog_id                 ID of blog (Multisite only). Default is ID of the current blog.
 *     @type string       $who                     Which type of users to query. Accepts only an empty string or
 *                                                 'authors'. Default empty.
 *     @type string|array $role                    An array or a comma-separated list of role names that users must
 *                                                 match to be included in results. Note that this is an inclusive
 *                                                 list: users must match *each* role. Default empty.
 *     @type string[]     $role__in                An array of role names. Matched users must have at least one of
 *                                                 these roles. Default empty array.
 *     @type string[]     $role__not_in            An array of role names to exclude. Users matching one or more of
 *                                                 these roles will not be included in results. Default empty array.
 * }
 * @return string HTML dropdown list of users.
 * @phpstan-param array{
 *   show_option_all?: string,
 *   show_option_none?: string,
 *   option_none_value?: int|string,
 *   hide_if_only_one_author?: string,
 *   orderby?: string,
 *   order?: string,
 *   include?: int[]|string,
 *   exclude?: int[]|string,
 *   multi?: bool|int,
 *   show?: string,
 *   echo?: int|bool,
 *   selected?: int,
 *   include_selected?: bool,
 *   name?: string,
 *   id?: string,
 *   class?: string,
 *   blog_id?: int,
 *   who?: string,
 *   role?: string|array,
 *   role__in?: string[],
 *   role__not_in?: string[],
 *   blog_id?: int,
 *   role?: string|string[],
 *   role__in?: string[],
 *   role__not_in?: string[],
 *   meta_key?: string|string[],
 *   meta_value?: string|string[],
 *   meta_compare?: string,
 *   meta_compare_key?: string,
 *   meta_type?: string,
 *   meta_type_key?: string,
 *   meta_query?: array,
 *   capability?: string|string[],
 *   capability__in?: string[],
 *   capability__not_in?: string[],
 *   include?: int[],
 *   exclude?: int[],
 *   search?: string,
 *   search_columns?: string[],
 *   orderby?: string|array,
 *   order?: string,
 *   offset?: int,
 *   number?: int,
 *   paged?: int,
 *   count_total?: bool,
 *   fields?: string|string[],
 *   who?: string,
 *   has_published_posts?: bool|string[],
 *   nicename?: string,
 *   nicename__in?: string[],
 *   nicename__not_in?: string[],
 *   login?: string,
 *   login__in?: string[],
 *   login__not_in?: string[],
 * } $args
 */
function wp_dropdown_users($args = '')
{
}