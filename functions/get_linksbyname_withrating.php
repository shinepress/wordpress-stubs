<?php


/**
 * Gets the links associated with category 'cat_name' and display rating stars/chars.
 *
 * @since 0.71
 * @deprecated 2.1.0 Use get_bookmarks()
 * @see get_bookmarks()
 *
 * @param string $cat_name The category name to use. If no match is found uses all
 * @param string $before The html to output before the link
 * @param string $after The html to output after the link
 * @param string $between The html to output between the link/image and its description. Not used if no image or show_images is true
 * @param bool $show_images Whether to show images (if defined).
 * @param string $orderby the order to output the links. E.g. 'id', 'name', 'url',
 *		'description', or 'rating'. Or maybe owner. If you start the name with an
 *		underscore the order will be reversed. You can also specify 'rand' as the
 *		order which will return links in a random order.
 * @param bool $show_description Whether to show the description if show_images=false/not defined
 * @param int $limit Limit to X entries. If not specified, all entries are shown.
 * @param int $show_updated Whether to show last updated timestamp
 */
function get_linksbyname_withrating($cat_name = "noname", $before = '', $after = '<br />', $between = " ", $show_images = \true, $orderby = 'id', $show_description = \true, $limit = -1, $show_updated = 0)
{
}