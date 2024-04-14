<?php


/**
 * Retrieve user data based on field.
 *
 * @since 1.5.0
 * @deprecated 3.0.0 Use get_the_author_meta()
 * @see get_the_author_meta()
 *
 * @param string    $field User meta field.
 * @param false|int $user  Optional. User ID to retrieve the field for. Default false (current user).
 * @return string The author's field from the current author's DB object.
 */
function get_profile($field, $user = \false)
{
}