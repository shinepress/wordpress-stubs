<?php


/**
 * Processes new site registrations.
 *
 * Checks the data provided by the user during blog signup. Verifies
 * the validity and uniqueness of blog paths and domains.
 *
 * This function prevents the current user from registering a new site
 * with a blogname equivalent to another user's login name. Passing the
 * $user parameter to the function, where $user is the other user, is
 * effectively an override of this limitation.
 *
 * Filter {@see 'wpmu_validate_blog_signup'} if you want to modify
 * the way that WordPress validates new site signups.
 *
 * @since MU (3.0.0)
 *
 * @global wpdb   $wpdb   WordPress database abstraction object.
 * @global string $domain
 *
 * @param string         $blogname   The blog name provided by the user. Must be unique.
 * @param string         $blog_title The blog title provided by the user.
 * @param WP_User|string $user       Optional. The user object to check against the new site name.
 * @return array {
 *     Array of domain, path, blog name, blog title, user and error messages.
 *
 *     @type string         $domain     Domain for the site.
 *     @type string         $path       Path for the site. Used in subdirectory installations.
 *     @type string         $blogname   The unique site name (slug).
 *     @type string         $blog_title Blog title.
 *     @type string|WP_User $user       By default, an empty string. A user object if provided.
 *     @type WP_Error       $errors     WP_Error containing any errors found.
 * }
 * @phpstan-return array{
 *   domain: string,
 *   path: string,
 *   blogname: string,
 *   blog_title: string,
 *   user: string|WP_User,
 *   errors: WP_Error,
 * }
 */
function wpmu_validate_blog_signup($blogname, $blog_title, $user = '')
{
}