<?php


/**
 * Does comment contain disallowed characters or words.
 *
 * @since 1.5.0
 * @deprecated 5.5.0 Use wp_check_comment_disallowed_list() instead.
 *                   Please consider writing more inclusive code.
 *
 * @param string $author The author of the comment
 * @param string $email The email of the comment
 * @param string $url The url used in the comment
 * @param string $comment The comment content
 * @param string $user_ip The comment author's IP address
 * @param string $user_agent The author's browser user agent
 * @return bool True if comment contains disallowed content, false if comment does not
 */
function wp_blacklist_check($author, $email, $url, $comment, $user_ip, $user_agent)
{
}