<?php


/**
 * Converts all numeric HTML entities to their named counterparts.
 *
 * This function decodes numeric HTML entities (`&#65;` and `&#x41;`).
 * It doesn't do anything with named entities like `&auml;`, but we don't
 * need them in the URL protocol whitelisting system anyway.
 *
 * @since 1.0.0
 *
 * @param string $string Content to change entities.
 * @return string Content after decoded entities.
 */
function wp_kses_decode_entities($string)
{
}