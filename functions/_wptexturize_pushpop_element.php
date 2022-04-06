<?php


/**
 * Search for disabled element tags. Push element to stack on tag open and pop
 * on tag close.
 *
 * Assumes first char of $text is tag opening and last char is tag closing.
 * Assumes second char of $text is optionally '/' to indicate closing as in </html>.
 *
 * @since 2.9.0
 * @access private
 *
 * @param string $text Text to check. Must be a tag like `<html>` or `[shortcode]`.
 * @param array  $stack List of open tag elements.
 * @param array  $disabled_elements The tag names to match against. Spaces are not allowed in tag names.
 */
function _wptexturize_pushpop_element($text, &$stack, $disabled_elements)
{
}