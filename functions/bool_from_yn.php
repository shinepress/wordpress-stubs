<?php


/**
 * Determines whether input is yes or no.
 *
 * Must be 'y' to be true.
 *
 * @since 1.0.0
 *
 * @param string $yn Character string containing either 'y' (yes) or 'n' (no).
 * @return bool True if 'y', false on anything else.
 * @phpstan-return ($yn is 'y' ? true : false)
 */
function bool_from_yn($yn)
{
}