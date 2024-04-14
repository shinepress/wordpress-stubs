<?php


class POMO_Reader
{
    var $endian = 'little';
    var $_post = '';
    /**
     * PHP5 constructor.
     */
    function __construct()
    {
    }
    /**
     * PHP4 constructor.
     *
     * @deprecated 5.4.0 Use __construct() instead.
     *
     * @see POMO_Reader::__construct()
     */
    public function POMO_Reader()
    {
    }
    /**
     * Sets the endianness of the file.
     *
     * @param string $endian Set the endianness of the file. Accepts 'big', or 'little'.
     * @phpstan-param 'big'|'little' $endian
     */
    function setEndian($endian)
    {
    }
    /**
     * Reads a 32bit Integer from the Stream
     *
     * @return mixed The integer, corresponding to the next 32 bits from
     *  the stream of false if there are not enough bytes or on error
     */
    function readint32()
    {
    }
    /**
     * Reads an array of 32-bit Integers from the Stream
     *
     * @param integer $count How many elements should be read
     * @return mixed Array of integers or false if there isn't
     *  enough data or on error
     */
    function readint32array($count)
    {
    }
    /**
     * @param string $string
     * @param int    $start
     * @param int    $length
     * @return string
     */
    function substr($string, $start, $length)
    {
    }
    /**
     * @param string $string
     * @return int
     */
    function strlen($string)
    {
    }
    /**
     * @param string $string
     * @param int    $chunk_size
     * @return array
     */
    function str_split($string, $chunk_size)
    {
    }
    /**
     * @return int
     */
    function pos()
    {
    }
    /**
     * @return true
     */
    function is_resource()
    {
    }
    /**
     * @return true
     */
    function close()
    {
    }
}