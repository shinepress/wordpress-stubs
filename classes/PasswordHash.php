<?php


/**
 * Portable PHP password hashing framework.
 *
 * @package phpass
 * @version 0.5 / WordPress
 * @link https://www.openwall.com/phpass/
 * @since 2.5.0
 */
class PasswordHash
{
    var $itoa64;
    var $iteration_count_log2;
    var $portable_hashes;
    var $random_state;
    function __construct($iteration_count_log2, $portable_hashes)
    {
    }
    function PasswordHash($iteration_count_log2, $portable_hashes)
    {
    }
    function get_random_bytes($count)
    {
    }
    function encode64($input, $count)
    {
    }
    function gensalt_private($input)
    {
    }
    function crypt_private($password, $setting)
    {
    }
    function gensalt_blowfish($input)
    {
    }
    function HashPassword($password)
    {
    }
    function CheckPassword($password, $stored_hash)
    {
    }
}