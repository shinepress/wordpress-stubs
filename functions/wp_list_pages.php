<?php


/**
 * Retrieve or display a list of pages (or hierarchical post type items) in list (li) format.
 *
 * @since 1.5.0
 * @since 4.7.0 Added the `item_spacing` argument.
 *
 * @see get_pages()
 *
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @param array|string $args {
 *     Optional. Array or string of arguments to generate a list of pages. See `get_pages()` for additional arguments.
 *
 *     @type int          $child_of     Display only the sub-pages of a single page by ID. Default 0 (all pages).
 *     @type string       $authors      Comma-separated list of author IDs. Default empty (all authors).
 *     @type string       $date_format  PHP date format to use for the listed pages. Relies on the 'show_date' parameter.
 *                                      Default is the value of 'date_format' option.
 *     @type int          $depth        Number of levels in the hierarchy of pages to include in the generated list.
 *                                      Accepts -1 (any depth), 0 (all pages), 1 (top-level pages only), and n (pages to
 *                                      the given n depth). Default 0.
 *     @type bool         $echo         Whether or not to echo the list of pages. Default true.
 *     @type string       $exclude      Comma-separated list of page IDs to exclude. Default empty.
 *     @type array        $include      Comma-separated list of page IDs to include. Default empty.
 *     @type string       $link_after   Text or HTML to follow the page link label. Default null.
 *     @type string       $link_before  Text or HTML to precede the page link label. Default null.
 *     @type string       $post_type    Post type to query for. Default 'page'.
 *     @type string|array $post_status  Comma-separated list or array of post statuses to include. Default 'publish'.
 *     @type string       $show_date    Whether to display the page publish or modified date for each page. Accepts
 *                                      'modified' or any other value. An empty value hides the date. Default empty.
 *     @type string       $sort_column  Comma-separated list of column names to sort the pages by. Accepts 'post_author',
 *                                      'post_date', 'post_title', 'post_name', 'post_modified', 'post_modified_gmt',
 *                                      'menu_order', 'post_parent', 'ID', 'rand', or 'comment_count'. Default 'post_title'.
 *     @type string       $title_li     List heading. Passing a null or empty value will result in no heading, and the list
 *                                      will not be wrapped with unordered list `<ul>` tags. Default 'Pages'.
 *     @type string       $item_spacing Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'.
 *                                      Default 'preserve'.
 *     @type Walker       $walker       Walker instance to use for listing pages. Default empty (Walker_Page).
 * }
 * @return string|void HTML list of pages.
 * @phpstan-param array{
 *   child_of?: int,
 *   authors?: string,
 *   date_format?: string,
 *   depth?: int,
 *   echo?: bool,
 *   exclude?: string,
 *   include?: array,
 *   link_after?: string,
 *   link_before?: string,
 *   post_type?: string,
 *   post_status?: string|array,
 *   show_date?: string,
 *   sort_column?: string,
 *   title_li?: string,
 *   item_spacing?: string,
 *   walker?: Walker,
 * } $args
 */
function wp_list_pages($args = '')
{
}