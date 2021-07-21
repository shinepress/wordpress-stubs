<?php


/**
 * Retrieve list of themes with theme data in theme directory.
 *
 * The theme is broken, if it doesn't have a parent theme and is missing either
 * style.css and, or index.php. If the theme has a parent theme then it is
 * broken, if it is missing style.css; index.php is optional.
 *
 * @since 1.5.0
 * @deprecated 3.4.0 Use wp_get_themes()
 * @see wp_get_themes()
 *
 * @return array Theme list with theme data.
 */
function get_themes()
{
}