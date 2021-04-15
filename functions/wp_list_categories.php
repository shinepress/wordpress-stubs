<?php


/**
 * Display or retrieve the HTML list of categories.
 *
 * @since 2.1.0
 * @since 4.4.0 Introduced the `hide_title_if_empty` and `separator` arguments. The `current_category` argument was modified to
 *              optionally accept an array of values.
 *
 * @param string|array $args {
 *     Array of optional arguments.
 *
 *     @type int          $child_of              Term ID to retrieve child terms of. See get_terms(). Default 0.
 *     @type int|array    $current_category      ID of category, or array of IDs of categories, that should get the
 *                                               'current-cat' class. Default 0.
 *     @type int          $depth                 Category depth. Used for tab indentation. Default 0.
 *     @type bool|int     $echo                  True to echo markup, false to return it. Default 1.
 *     @type array|string $exclude               Array or comma/space-separated string of term IDs to exclude.
 *                                               If `$hierarchical` is true, descendants of `$exclude` terms will also
 *                                               be excluded; see `$exclude_tree`. See get_terms().
 *                                               Default empty string.
 *     @type array|string $exclude_tree          Array or comma/space-separated string of term IDs to exclude, along
 *                                               with their descendants. See get_terms(). Default empty string.
 *     @type string       $feed                  Text to use for the feed link. Default 'Feed for all posts filed
 *                                               under [cat name]'.
 *     @type string       $feed_image            URL of an image to use for the feed link. Default empty string.
 *     @type string       $feed_type             Feed type. Used to build feed link. See get_term_feed_link().
 *                                               Default empty string (default feed).
 *     @type bool|int     $hide_empty            Whether to hide categories that don't have any posts attached to them.
 *                                               Default 1.
 *     @type bool         $hide_title_if_empty   Whether to hide the `$title_li` element if there are no terms in
 *                                               the list. Default false (title will always be shown).
 *     @type bool         $hierarchical          Whether to include terms that have non-empty descendants.
 *                                               See get_terms(). Default true.
 *     @type string       $order                 Which direction to order categories. Accepts 'ASC' or 'DESC'.
 *                                               Default 'ASC'.
 *     @type string       $orderby               The column to use for ordering categories. Default 'ID'.
 *     @type string       $separator             Separator between links. Default '<br />'.
 *     @type bool|int     $show_count            Whether to show how many posts are in the category. Default 0.
 *     @type string       $show_option_all       Text to display for showing all categories. Default empty string.
 *     @type string       $show_option_none      Text to display for the 'no categories' option.
 *                                               Default 'No categories'.
 *     @type string       $style                 The style used to display the categories list. If 'list', categories
 *                                               will be output as an unordered list. If left empty or another value,
 *                                               categories will be output separated by `<br>` tags. Default 'list'.
 *     @type string       $taxonomy              Taxonomy name. Default 'category'.
 *     @type string       $title_li              Text to use for the list title `<li>` element. Pass an empty string
 *                                               to disable. Default 'Categories'.
 *     @type bool|int     $use_desc_for_title    Whether to use the category description as the title attribute.
 *                                               Default 1.
 * }
 * @return false|string HTML content only if 'echo' argument is 0.
 */
function wp_list_categories($args = '')
{
}