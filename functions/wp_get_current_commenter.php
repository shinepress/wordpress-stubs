<?php


/**
 * Get current commenter's name, email, and URL.
 *
 * Expects cookies content to already be sanitized. User of this function might
 * wish to recheck the returned array for validity.
 *
 * @see sanitize_comment_cookies() Use to sanitize cookies
 *
 * @since 2.0.4
 *
 * @return array Comment author, email, url respectively.
 */
function wp_get_current_commenter()
{
}