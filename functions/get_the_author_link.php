<?php


/**
 * Retrieves either author's link or author's name.
 *
 * If the author has a home page set, return an HTML link, otherwise just return the
 * author's name.
 *
 * @since 3.0.0
 *
 * @global WP_User $authordata The current author's data.
 *
 * @return string|null An HTML link if the author's url exist in user meta,
 *                     else the result of get_the_author().
 */
function get_the_author_link()
{
}