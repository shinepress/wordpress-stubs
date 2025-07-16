<?php


/**
 * Returns a list of registered shortcode names found in the given content.
 *
 * Example usage:
 *
 *     get_shortcode_tags_in_content( '[audio src="file.mp3"][/audio] [foo] [gallery ids="1,2,3"]' );
 *     // array( 'audio', 'gallery' )
 *
 * @since 6.3.2
 *
 * @param string $content The content to check.
 * @return string[] An array of registered shortcode names found in the content.
 */
function get_shortcode_tags_in_content($content)
{
}