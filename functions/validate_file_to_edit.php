<?php


/**
 * Makes sure that the file that was requested to be edited is allowed to be edited.
 *
 * Function will die if you are not allowed to edit the file.
 *
 * @since 1.5.0
 *
 * @param string $file          File the user is attempting to edit.
 * @param array  $allowed_files Optional. Array of allowed files to edit, $file must match an entry exactly.
 * @return string|null
 */
function validate_file_to_edit($file, $allowed_files = array())
{
}