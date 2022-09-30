<?php


/**
 * Finds a script handle for the selected block metadata field. It detects
 * when a path to file was provided and finds a corresponding asset file
 * with details necessary to register the script under automatically
 * generated handle name. It returns unprocessed script handle otherwise.
 *
 * @since 5.5.0
 *
 * @param array  $metadata   Block metadata.
 * @param string $field_name Field name to pick from metadata.
 * @return string|false Script handle provided directly or created through
 *                      script's registration, or false on failure.
 */
function register_block_script_handle($metadata, $field_name)
{
}