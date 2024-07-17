<?php


class POMO_FileReader extends \POMO_Reader
{
    /**
     * File pointer resource.
     *
     * @var resource|false
     */
    public $_f;
    /**
     * @param string $filename
     */
    public function __construct($filename)
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
    public function read($bytes)
    {
    }
    /**
     * @param int $pos
     * @return bool
     */
    public function seekto($pos)
    {
    }
    /**
     * @return bool
     */
    public function is_resource()
    {
    }
    /**
     * @return bool
     */
    public function feof()
    {
    }
    /**
     * @return bool
     */
    public function close()
    {
    }
    /**
     * @return string
     */
    public function read_all()
    {
    }
}