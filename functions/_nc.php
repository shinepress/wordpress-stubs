<?php


/**
 * Legacy version of _n(), which supports contexts.
 *
 * Strips everything from the translation after the last bar.
 *
 * @since 2.7.0
 * @deprecated 3.0.0 Use _nx()
 * @see _nx()
 *
 * @param string $single The text to be used if the number is singular.
 * @param string $plural The text to be used if the number is plural.
 * @param int    $number The number to compare against to use either the singular or plural form.
 * @param string $domain Optional. Text domain. Unique identifier for retrieving translated strings.
 *                       Default 'default'.
 * @return string The translated singular or plural form.
 */
function _nc($single, $plural, $number, $domain = 'default')
{
}