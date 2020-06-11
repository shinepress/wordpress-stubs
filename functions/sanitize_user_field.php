<?php


/**
 * Sanitize user field based on context.
 *
 * Possible context values are:  'raw', 'edit', 'db', 'display', 'attribute' and 'js'. The
 * 'display' context is used by default. 'attribute' and 'js' contexts are treated like 'display'
 * when calling filters.
 *
 * @since 2.3.0
 *
 * @param string $field   The user Object field name.
 * @param mixed  $value   The user Object value.
 * @param int    $user_id User ID.
 * @param string $context How to sanitize user fields. Looks for 'raw', 'edit', 'db', 'display',
 *                        'attribute' and 'js'.
 * @return mixed Sanitized value.
 */
function sanitize_user_field($field, $value, $user_id, $context)
{
}