<?php


/**
 * Core Comment API
 *
 * @package WordPress
 * @subpackage Comment
 */
/**
 * Check whether a comment passes internal checks to be allowed to add.
 *
 * If manual comment moderation is set in the administration, then all checks,
 * regardless of their type and whitelist, will fail and the function will
 * return false.
 *
 * If the number of links exceeds the amount in the administration, then the
 * check fails. If any of the parameter contents match the blacklist of words,
 * then the check fails.
 *
 * If the comment author was approved before, then the comment is automatically
 * whitelisted.
 *
 * If all checks pass, the function will return true.
 *
 * @since 1.2.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $author       Comment author name.
 * @param string $email        Comment author email.
 * @param string $url          Comment author URL.
 * @param string $comment      Content of the comment.
 * @param string $user_ip      Comment author IP address.
 * @param string $user_agent   Comment author User-Agent.
 * @param string $comment_type Comment type, either user-submitted comment,
 *                             trackback, or pingback.
 * @return bool If all checks pass, true, otherwise false.
 */
function check_comment($author, $email, $url, $comment, $user_ip, $user_agent, $comment_type)
{
}