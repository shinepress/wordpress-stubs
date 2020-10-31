<?php


/**
 * Sanitize post field based on context.
 *
 * Possible context values are:  'raw', 'edit', 'db', 'display', 'attribute' and
 * 'js'. The 'display' context is used by default. 'attribute' and 'js' contexts
 * are treated like 'display' when calling filters.
 *
 * @since 2.3.0
 * @since 4.4.0 Like `sanitize_post()`, `$context` defaults to 'display'.
 *
 * @param string $field   The Post Object field name.
 * @param mixed  $value   The Post Object value.
 * @param int    $post_id Post ID.
 * @param string $context Optional. How to sanitize post fields. Looks for 'raw', 'edit',
 *                        'db', 'display', 'attribute' and 'js'. Default 'display'.
 * @return mixed Sanitized value.
 */
function sanitize_post_field($field, $value, $post_id, $context = 'display')
{
}