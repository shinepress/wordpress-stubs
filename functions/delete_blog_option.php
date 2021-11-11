<?php


/**
 * Removes option by name for a given blog id. Prevents removal of protected WordPress options.
 *
 * @since MU (3.0.0)
 *
 * @param int    $id     A blog ID. Can be null to refer to the current blog.
 * @param string $option Name of option to remove. Expected to not be SQL-escaped.
 * @return bool True, if option is successfully deleted. False on failure.
 */
function delete_blog_option($id, $option)
{
}