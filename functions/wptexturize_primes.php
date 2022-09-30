<?php


/**
 * Implements a logic tree to determine whether or not "7'." represents seven feet,
 * then converts the special char into either a prime char or a closing quote char.
 *
 * @since 4.3.0
 *
 * @param string $haystack    The plain text to be searched.
 * @param string $needle      The character to search for such as ' or ".
 * @param string $prime       The prime char to use for replacement.
 * @param string $open_quote  The opening quote char. Opening quote replacement must be
 *                            accomplished already.
 * @param string $close_quote The closing quote char to use for replacement.
 * @return string The $haystack value after primes and quotes replacements.
 */
function wptexturize_primes($haystack, $needle, $prime, $open_quote, $close_quote)
{
}