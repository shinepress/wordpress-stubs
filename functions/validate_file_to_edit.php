<?php


/**
 * Make sure that the file that was requested to edit, is allowed to be edited
 *
 * Function will die if you are not allowed to edit the file
 *
 * @since 1.5.0
 *
 * @param string $file file the users is attempting to edit
 * @param array $allowed_files Array of allowed files to edit, $file must match an entry exactly
 * @return string|null
 */
function validate_file_to_edit($file, $allowed_files = '')
{
}