<?php


/**
 * Strips slashes from in front of quotes.
 *
 * This function changes the character sequence \" to just ". It leaves all
 * other slashes alone. It's really weird, but the quoting from
 * preg_replace(//e) seems to require this.
 *
 * @since 1.0.0
 *
 * @param string $string String to strip slashes
 * @return string Fixed string with quoted slashes
 */
function wp_kses_stripslashes($string)
{
}