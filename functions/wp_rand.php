<?php


/**
 * Generates a random number.
 *
 * @since 2.6.2
 * @since 4.4.0 Uses PHP7 random_int() or the random_compat library if available.
 *
 * @global string $rnd_value
 * @staticvar string $seed
 * @staticvar bool $use_random_int_functionality
 *
 * @param int $min Lower limit for the generated number
 * @param int $max Upper limit for the generated number
 * @return int A random number between min and max
 */
function wp_rand($min = 0, $max = 0)
{
}