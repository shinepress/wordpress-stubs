<?php


/**
 * Gets an array of link objects associated with category $cat_name.
 *
 *     $links = get_linkobjectsbyname( 'fred' );
 *     foreach ( $links as $link ) {
 *      	echo '<li>' . $link->link_name . '</li>';
 *     }
 *
 * @since 1.0.1
 * @deprecated 2.1.0 Use get_bookmarks()
 * @see get_bookmarks()
 *
 * @param string $cat_name Optional. The category name to use. If no match is found, uses all.
 *                         Default 'noname'.
 * @param string $orderby  Optional. The order to output the links. E.g. 'id', 'name', 'url',
 *                         'description', 'rating', or 'owner'. Default 'name'.
 *                         If you start the name with an underscore, the order will be reversed.
 *                         Specifying 'rand' as the order will return links in a random order.
 * @param int    $limit    Optional. Limit to X entries. If not specified, all entries are shown.
 *                         Default -1.
 * @return array
 */
function get_linkobjectsbyname($cat_name = "noname", $orderby = 'name', $limit = -1)
{
}