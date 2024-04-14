<?php


/**
 * Outputs the field from the user's DB object. Defaults to current post's author.
 *
 * @since 2.8.0
 *
 * @param string    $field   Selects the field of the users record. See get_the_author_meta()
 *                           for the list of possible fields.
 * @param int|false $user_id Optional. User ID.
 *
 * @see get_the_author_meta()
 */
function the_author_meta($field = '', $user_id = \false)
{
}