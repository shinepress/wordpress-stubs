<?php


/**
 * Filters content and keeps only allowable HTML elements.
 *
 * This function makes sure that only the allowed HTML element names, attribute
 * names and attribute values plus only sane HTML entities will occur in
 * $string. You have to remove any slashes from PHP's magic quotes before you
 * call this function.
 *
 * The default allowed protocols are 'http', 'https', 'ftp', 'mailto', 'news',
 * 'irc', 'gopher', 'nntp', 'feed', 'telnet, 'mms', 'rtsp' and 'svn'. This
 * covers all common link protocols, except for 'javascript' which should not
 * be allowed for untrusted users.
 *
 * @since 1.0.0
 *
 * @param string $string            Content to filter through kses
 * @param array  $allowed_html      List of allowed HTML elements
 * @param array  $allowed_protocols Optional. Allowed protocol in links.
 * @return string Filtered content with only allowed HTML elements
 */
function wp_kses($string, $allowed_html, $allowed_protocols = array())
{
}