<?php


/**
 * Shows a message confirming that the new site has been registered and is awaiting activation.
 *
 * @since MU (3.0.0)
 *
 * @param string $domain     The domain or subdomain of the site.
 * @param string $path       The path of the site.
 * @param string $blog_title The title of the new site.
 * @param string $user_name  The user's username.
 * @param string $user_email The user's email address.
 * @param array  $meta       Any additional meta from the {@see 'add_signup_meta'} filter in validate_blog_signup().
 */
function confirm_blog_signup($domain, $path, $blog_title, $user_name = '', $user_email = '', $meta = array())
{
}