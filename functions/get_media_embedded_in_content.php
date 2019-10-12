<?php


/**
 * Check the content blob for an audio, video, object, embed, or iframe tags.
 *
 * @since 3.6.0
 *
 * @param string $content A string which might contain media data.
 * @param array  $types   An array of media types: 'audio', 'video', 'object', 'embed', or 'iframe'.
 * @return array A list of found HTML media embeds.
 */
function get_media_embedded_in_content($content, $types = \null)
{
}