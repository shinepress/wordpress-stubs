<?php


class POMO_FileReader extends \POMO_Reader
{
    /**
     * @param string $filename
     */
    function __construct($filename)
    {
    }
    /**
     * PHP4 constructor.
     *
     * @deprecated 5.4.0 Use __construct() instead.
     *
     * @see POMO_FileReader::__construct()
     */
    public function POMO_FileReader($filename)
    {
    }
    /**
     * @param int $bytes
     * @return string|false Returns read string, otherwise false.
     */
    function read($bytes)
    {
    }
    /**
     * @param int $pos
     * @return boolean
     */
    function seekto($pos)
    {
    }
    /**
     * @return bool
     */
    function is_resource()
    {
    }
    /**
     * @return bool
     */
    function feof()
    {
    }
    /**
     * @return bool
     */
    function close()
    {
    }
    /**
     * @return string
     */
    function read_all()
    {
    }
}