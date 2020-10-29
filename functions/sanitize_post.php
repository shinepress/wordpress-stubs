<?php


/**
 * Sanitize every post field.
 *
 * If the context is 'raw', then the post object or array will get minimal
 * sanitization of the integer fields.
 *
 * @since 2.3.0
 *
 * @see sanitize_post_field()
 *
 * @param object|WP_Post|array $post    The Post Object or Array
 * @param string               $context Optional. How to sanitize post fields.
 *                                      Accepts 'raw', 'edit', 'db', or 'display'.
 *                                      Default 'display'.
 * @return object|WP_Post|array The now sanitized Post Object or Array (will be the
 *                              same type as $post).
 */
function sanitize_post($post, $context = 'display')
{
}