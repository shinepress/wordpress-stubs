<?php


/**
 * Gets an array of link objects associated with category n.
 *
 * Usage:
 *
 *     $links = get_linkobjects(1);
 *     if ($links) {
 *     	foreach ($links as $link) {
 *     		echo '<li>'.$link->link_name.'<br />'.$link->link_description.'</li>';
 *     	}
 *     }
 *
 * Fields are:
 *
 * - link_id
 * - link_url
 * - link_name
 * - link_image
 * - link_target
 * - link_category
 * - link_description
 * - link_visible
 * - link_owner
 * - link_rating
 * - link_updated
 * - link_rel
 * - link_notes
 *
 * @since 1.0.1
 * @deprecated 2.1.0 Use get_bookmarks()
 * @see get_bookmarks()
 *
 * @param int    $category Optional. The category to use. If no category supplied, uses all.
 *                         Default 0.
 * @param string $orderby  Optional. The order to output the links. E.g. 'id', 'name', 'url',
 *                         'description', 'rating', or 'owner'. Default 'name'.
 *                         If you start the name with an underscore, the order will be reversed.
 *                         Specifying 'rand' as the order will return links in a random order.
 * @param int    $limit    Optional. Limit to X entries. If not specified, all entries are shown.
 *                         Default 0.
 * @return array
 */
function get_linkobjects($category = 0, $orderby = 'name', $limit = 0)
{
}