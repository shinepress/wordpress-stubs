<?php


/**
 * Reads the contents of the file in the beginning.
 */
class POMO_CachedFileReader extends \POMO_StringReader
{
    /**
     * PHP5 constructor.
     */
    public function __construct($filename)
    {
    }
    /**
     * PHP4 constructor.
     *
     * @deprecated 5.4.0 Use __construct() instead.
     *
     * @see POMO_CachedFileReader::__construct()
     */
    public function POMO_CachedFileReader($filename)
    {
    }
}