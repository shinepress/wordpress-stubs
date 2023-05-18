<?php


/**
 * Gets the links associated with category n and display rating stars/chars.
 *
 * @since 0.71
 * @deprecated 2.1.0 Use get_bookmarks()
 * @see get_bookmarks()
 *
 * @param int    $category         Optional. The category to use. If no category supplied, uses all.
 *                                 Default 0.
 * @param string $before           Optional. The HTML to output before the link. Default empty.
 * @param string $after            Optional. The HTML to output after the link. Default '<br />'.
 * @param string $between          Optional. The HTML to output between the link/image and its description.
 *                                 Not used if no image or $show_images is true. Default ' '.
 * @param bool   $show_images      Optional. Whether to show images (if defined). Default true.
 * @param string $orderby          Optional. The order to output the links. E.g. 'id', 'name', 'url',
 *                                 'description', 'rating', or 'owner'. Default 'id'.
 *                                 If you start the name with an underscore, the order will be reversed.
 *                                 Specifying 'rand' as the order will return links in a random order.
 * @param bool   $show_description Optional. Whether to show the description if show_images=false/not defined.
 *                                 Default true.
 * @param int    $limit		       Optional. Limit to X entries. If not specified, all entries are shown.
 *                                 Default -1.
 * @param int    $show_updated     Optional. Whether to show last updated timestamp. Default 0.
 */
function get_links_withrating($category = -1, $before = '', $after = '<br />', $between = " ", $show_images = \true, $orderby = 'id', $show_description = \true, $limit = -1, $show_updated = 0)
{
}