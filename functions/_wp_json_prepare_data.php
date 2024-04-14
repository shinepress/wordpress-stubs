<?php


/**
 * Prepares response data to be serialized to JSON.
 *
 * This supports the JsonSerializable interface for PHP 5.2-5.3 as well.
 *
 * @ignore
 * @since 4.4.0
 * @deprecated 5.3.0 This function is no longer needed as support for PHP 5.2-5.3
 *                   has been dropped.
 * @access private
 *
 * @param mixed $value Native representation.
 * @return bool|int|float|null|string|array Data ready for `json_encode()`.
 */
function _wp_json_prepare_data($value)
{
}