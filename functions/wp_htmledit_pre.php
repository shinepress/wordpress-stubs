<?php


/**
 * Formats text for the HTML editor.
 *
 * Unless $output is empty it will pass through htmlspecialchars before the
 * {@see 'htmledit_pre'} filter is applied.
 *
 * @since 2.5.0
 * @deprecated 4.3.0 Use format_for_editor()
 * @see format_for_editor()
 *
 * @param string $output The text to be formatted.
 * @return string Formatted text after filter applied.
 */
function wp_htmledit_pre($output)
{
}