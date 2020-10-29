<?php


/**
 * Notifies the network admin that a new site has been activated.
 *
 * Filter {@see 'newblog_notify_siteadmin'} to change the content of
 * the notification email.
 *
 * @since MU
 *
 * @param int    $blog_id    The new site's ID.
 * @param string $deprecated Not used.
 * @return bool
 */
function newblog_notify_siteadmin($blog_id, $deprecated = '')
{
}