<?php


/**
 * Validate a new site signup for an existing user.
 *
 * @global string          $blogname   The new site's subdomain or directory name.
 * @global string          $blog_title The new site's title.
 * @global WP_Error        $errors     Existing errors in the global scope.
 * @global string          $domain     The new site's domain.
 * @global string          $path       The new site's path.
 *
 * @since MU (3.0.0)
 *
 * @return null|bool True if site signup was validated, false if error.
 *                   The function halts all execution if the user is not logged in.
 */
function validate_another_blog_signup()
{
}