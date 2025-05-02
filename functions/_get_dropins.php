<?php


/**
 * Returns drop-in plugins that WordPress uses.
 *
 * Includes Multisite drop-ins only when is_multisite()
 *
 * @since 3.0.0
 *
 * @return array[] {
 *     Key is file name. The value is an array of data about the drop-in.
 *
 *     @type array ...$0 {
 *         Data about the drop-in.
 *
 *         @type string      $0 The purpose of the drop-in.
 *         @type string|true $1 Name of the constant that must be true for the drop-in
 *                              to be used, or true if no constant is required.
 *     }
 * }
 * @phpstan-return array<int|string, array{
 *   0: string,
 *   1: string|true,
 * }>
 */
function _get_dropins()
{
}