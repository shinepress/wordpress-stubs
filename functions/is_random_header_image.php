<?php


/**
 * Checks if random header image is in use.
 *
 * Always true if user expressly chooses the option in Appearance > Header.
 * Also true if theme has multiple header images registered, no specific header image
 * is chosen, and theme turns on random headers with add_theme_support().
 *
 * @since 3.2.0
 *
 * @param string $type The random pool to use. Possible values include 'any',
 *                     'default', 'uploaded'. Default 'any'.
 * @return bool
 */
function is_random_header_image($type = 'any')
{
}