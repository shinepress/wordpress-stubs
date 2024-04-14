<?php

namespace Avifinfo;

//------------------------------------------------------------------------------
class Parser
{
    public $features;
    function __construct($handle)
    {
    }
    /**
     * Parses a file stream.
     *
     * The file type is checked through the "ftyp" box.
     *
     * @return bool True if the input stream is an AVIF bitstream or false.
     */
    public function parse_ftyp()
    {
    }
    /**
     * Parses a file stream.
     *
     * Features are extracted from the "meta" box.
     *
     * @return bool True if the main features of the primary item were parsed or false.
     */
    public function parse_file()
    {
    }
}