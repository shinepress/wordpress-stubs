<?php


/**
 * Create a site.
 *
 * This function runs when a user self-registers a new site as well
 * as when a Super Admin creates a new site. Hook to {@see 'wpmu_new_blog'}
 * for events that should affect all new sites.
 *
 * On subdirectory installs, $domain is the same as the main site's
 * domain, and the path is the subdirectory name (eg 'example.com'
 * and '/blog1/'). On subdomain installs, $domain is the new subdomain +
 * root domain (eg 'blog1.example.com'), and $path is '/'.
 *
 * @since MU
 *
 * @param string $domain  The new site's domain.
 * @param string $path    The new site's path.
 * @param string $title   The new site's title.
 * @param int    $user_id The user ID of the new site's admin.
 * @param array  $meta    Optional. Used to set initial site options.
 * @param int    $site_id Optional. Only relevant on multi-network installs.
 * @return int|WP_Error Returns WP_Error object on failure, int $blog_id on success
 */
function wpmu_create_blog($domain, $path, $title, $user_id, $meta = array(), $site_id = 1)
{
}