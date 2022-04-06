<?php


/**
 * Returns a shortlink for a post, page, attachment, or site.
 *
 * This function exists to provide a shortlink tag that all themes and plugins can target.
 * A plugin must hook in to provide the actual shortlinks. Default shortlink support is
 * limited to providing ?p= style links for posts. Plugins can short-circuit this function
 * via the {@see 'pre_get_shortlink'} filter or filter the output via the {@see 'get_shortlink'}
 * filter.
 *
 * @since 3.0.0.
 *
 * @param int    $id          Optional. A post or site id. Default is 0, which means the current post or site.
 * @param string $context     Optional. Whether the id is a 'site' id, 'post' id, or 'media' id. If 'post',
 *                            the post_type of the post is consulted. If 'query', the current query is consulted
 *                            to determine the id and context. Default 'post'.
 * @param bool   $allow_slugs Optional. Whether to allow post slugs in the shortlink. It is up to the plugin how
 *                            and whether to honor this. Default true.
 * @return string A shortlink or an empty string if no shortlink exists for the requested resource or if shortlinks
 *                are not enabled.
 */
function wp_get_shortlink($id = 0, $context = 'post', $allow_slugs = \true)
{
}