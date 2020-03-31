<?php


/**
 * Generates a random password drawn from the defined set of characters.
 *
 * Uses wp_rand() is used to create passwords with far less predictability
 * than similar native PHP functions like `rand()` or `mt_rand()`.
 *
 * @since 2.5.0
 *
 * @param int  $length              Optional. The length of password to generate. Default 12.
 * @param bool $special_chars       Optional. Whether to include standard special characters.
 *                                  Default true.
 * @param bool $extra_special_chars Optional. Whether to include other special characters.
 *                                  Used when generating secret keys and salts. Default false.
 * @return string The random password.
 */
function wp_generate_password($length = 12, $special_chars = \true, $extra_special_chars = \false)
{
}