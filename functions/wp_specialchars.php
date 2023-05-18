<?php


/**
 * Legacy escaping for HTML blocks.
 *
 * @deprecated 2.8.0 Use esc_html()
 * @see esc_html()
 *
 * @param string       $string        String to escape.
 * @param string       $quote_style   Unused.
 * @param false|string $charset       Unused.
 * @param false        $double_encode Whether to double encode. Unused.
 * @return string Escaped `$string`.
 */
function wp_specialchars($string, $quote_style = \ENT_NOQUOTES, $charset = \false, $double_encode = \false)
{
}