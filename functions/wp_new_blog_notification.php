<?php


/**
 * Notifies the site admin that the installation of WordPress is complete.
 *
 * Sends an email to the new administrator that the installation is complete
 * and provides them with a record of their login credentials.
 *
 * @since 2.1.0
 *
 * @param string $blog_title Site title.
 * @param string $blog_url   Site URL.
 * @param int    $user_id    Administrator's user ID.
 * @param string $password   Administrator's password. Note that a placeholder message is
 *                           usually passed instead of the actual password.
 */
function wp_new_blog_notification(
    $blog_title,
    $blog_url,
    $user_id,
    #[\SensitiveParameter]
    $password
)
{
}