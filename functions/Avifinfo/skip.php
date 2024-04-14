<?php

namespace Avifinfo;

/**
 * Advances the stream position by the given offset.
 *
 * @param stream $handle    Bytes will be skipped from this resource.
 * @param int    $num_bytes Number of skipped bytes. Can be 0.
 * @return bool             True on success or false on failure.
 */
// Skips 'num_bytes' from the 'stream'. 'num_bytes' can be zero.
function skip($handle, $num_bytes)
{
}