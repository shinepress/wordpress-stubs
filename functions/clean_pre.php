<?php


/**
 * Accepts matches array from preg_replace_callback in wpautop() or a string.
 *
 * Ensures that the contents of a `<pre>...</pre>` HTML block are not
 * converted into paragraphs or line breaks.
 *
 * @since 1.2.0
 * @deprecated 3.4.0
 *
 * @param array|string $matches The array or string
 * @return string The pre block without paragraph/line break conversion.
 */
function clean_pre($matches)
{
}