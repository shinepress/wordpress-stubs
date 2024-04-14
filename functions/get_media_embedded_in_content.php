<?php


/**
 * Check the content HTML for a audio, video, object, embed, or iframe tags.
 *
 * @since 3.6.0
 *
 * @param string   $content A string of HTML which might contain media elements.
 * @param string[] $types   An array of media types: 'audio', 'video', 'object', 'embed', or 'iframe'.
 * @return string[] Array of found HTML media elements.
 */
function get_media_embedded_in_content($content, $types = \null)
{
}