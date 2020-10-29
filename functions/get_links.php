<?php


/**
 * Gets the links associated with category by id.
 *
 * @since 0.71
 * @deprecated 2.1.0 Use get_bookmarks()
 * @see get_bookmarks()
 *
 * @param int $category The category to use. If no category supplied uses all
 * @param string $before the html to output before the link
 * @param string $after the html to output after the link
 * @param string $between the html to output between the link/image and its description.
 *		Not used if no image or show_images == true
 * @param bool $show_images whether to show images (if defined).
 * @param string $orderby the order to output the links. E.g. 'id', 'name', 'url',
 *		'description', or 'rating'. Or maybe owner. If you start the name with an
 *		underscore the order will be reversed. You can also specify 'rand' as the order
 *		which will return links in a random order.
 * @param bool $show_description whether to show the description if show_images=false/not defined.
 * @param bool $show_rating show rating stars/chars
 * @param int $limit Limit to X entries. If not specified, all entries are shown.
 * @param int $show_updated whether to show last updated timestamp
 * @param bool $echo whether to echo the results, or return them instead
 * @return null|string
 */
function get_links($category = -1, $before = '', $after = '<br />', $between = ' ', $show_images = \true, $orderby = 'name', $show_description = \true, $show_rating = \false, $limit = -1, $show_updated = 1, $echo = \true)
{
}