<?php

namespace Avifinfo;

/**
 * Reads bytes and advances the stream position by the same count.
 *
 * @param stream               $handle    Bytes will be read from this resource.
 * @param int                  $num_bytes Number of bytes read. Must be greater than 0.
 * @return binary string|false            The raw bytes or false on failure.
 */
function read($handle, $num_bytes)
{
}