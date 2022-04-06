<?php


/**
 * Convert any 4 byte emoji in a string to their equivalent HTML entity.
 *
 * Currently, only Unicode 7 emoji are supported. Skin tone modifiers are allowed,
 * all other Unicode 8 emoji will be added when the spec is finalised.
 *
 * This allows us to store emoji in a DB using the utf8 character set.
 *
 * @since 4.2.0
 *
 * @param string $content The content to encode.
 * @return string The encoded content.
 */
function wp_encode_emoji($content)
{
}