<?php


class POMO_Reader
{
    public $endian = 'little';
    public $_post = '';
    /**
     * PHP5 constructor.
     */
    public function __construct()
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
     */
    public function setEndian($endian)
    {
    }
    /**
     * Reads a 32bit Integer from the Stream
     *
     * @return mixed The integer, corresponding to the next 32 bits from
     *  the stream of false if there are not enough bytes or on error
     */
    public function readint32()
    {
    }
    /**
     * Reads an array of 32-bit Integers from the Stream
     *
     * @param int $count How many elements should be read
     * @return mixed Array of integers or false if there isn't
     *  enough data or on error
     */
    public function readint32array($count)
    {
    }
    /**
     * @param string $string
     * @param int    $start
     * @param int    $length
     * @return string
     */
    public function substr($string, $start, $length)
    {
    }
    /**
     * @param string $string
     * @return int
     */
    public function strlen($string)
    {
    }
    /**
     * @param string $string
     * @param int    $chunk_size
     * @return array
     */
    public function str_split($string, $chunk_size)
    {
    }
    /**
     * @return int
     */
    public function pos()
    {
    }
    /**
     * @return true
     */
    public function is_resource()
    {
    }
    /**
     * @return true
     */
    public function close()
    {
    }
}