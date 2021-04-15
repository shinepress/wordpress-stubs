<?php


/**
 * Record site signup information for future activation.
 *
 * @since MU
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $domain     The requested domain.
 * @param string $path       The requested path.
 * @param string $title      The requested site title.
 * @param string $user       The user's requested login name.
 * @param string $user_email The user's email address.
 * @param array  $meta       Optional. Signup meta data. By default, contains the requested privacy setting and lang_id.
 */
function wpmu_signup_blog($domain, $path, $title, $user, $user_email, $meta = array())
{
}