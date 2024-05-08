<?php


/**
 * Updates the `blog_public` option for a given site ID.
 *
 * @since 5.1.0
 *
 * @param int    $site_id   Site ID.
 * @param string $is_public Whether the site is public. A numeric string,
 *                          for compatibility reasons. Accepts '1' or '0'.
 * @phpstan-param '1'|'0' $is_public
 * @phpstan-return void
 */
function wp_update_blog_public_option_on_site_update($site_id, $is_public)
{
}