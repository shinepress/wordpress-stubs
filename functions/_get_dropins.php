<?php


/**
 * Returns drop-ins that WordPress uses.
 *
 * Includes Multisite drop-ins only when is_multisite()
 *
 * @since 3.0.0
 * @return array Key is file name. The value is an array, with the first value the
 *  purpose of the drop-in and the second value the name of the constant that must be
 *  true for the drop-in to be used, or true if no constant is required.
 */
function _get_dropins()
{
}