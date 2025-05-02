<?php

namespace Avifinfo;

class Box
{
    public $size;
    public $type;
    public $version;
    public $flags;
    public $content_size;
    /**
     * Reads the box header.
     *
     * @param stream  $handle              The resource the header will be parsed from.
     * @param int     $num_parsed_boxes    The total number of parsed boxes. Prevents timeouts.
     * @param int     $num_remaining_bytes The number of bytes that should be available from the resource.
     * @return Status                      FOUND on success or an error on failure.
     */
    public function parse($handle, &$num_parsed_boxes, $num_remaining_bytes = MAX_SIZE)
    {
    }
}