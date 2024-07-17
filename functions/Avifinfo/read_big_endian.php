<?php

namespace Avifinfo;

// Value was not yet parsed.
/**
 * Reads an unsigned integer with most significant bits first.
 *
 * @param binary string $input     Must be at least $num_bytes-long.
 * @param int           $num_bytes Number of parsed bytes.
 * @return int                     Value.
 */
function read_big_endian($input, $num_bytes)
{
}