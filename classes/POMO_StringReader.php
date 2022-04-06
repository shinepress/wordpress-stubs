<?php


/**
 * Provides file-like methods for manipulating a string instead
 * of a physical file.
 */
class POMO_StringReader extends \POMO_Reader
{
    var $_str = '';
    /**
     * PHP5 constructor.
     */
    function __construct($str = '')
    {
    }
    /**
     * PHP4 constructor.
     */
    public function POMO_StringReader($str = '')
    {
    }
    /**
     * @param string $bytes
     * @return string
     */
    function read($bytes)
    {
    }
    /**
     * @param int $pos
     * @return int
     */
    function seekto($pos)
    {
    }
    /**
     * @return int
     */
    function length()
    {
    }
    /**
     * @return string
     */
    function read_all()
    {
    }
}