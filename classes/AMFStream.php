<?php


class AMFStream
{
    /**
     * @var string
     */
    public $bytes;
    /**
     * @var int
     */
    public $pos;
    /**
     * @param string $bytes
     */
    public function __construct(&$bytes)
    {
    }
    /**
     * @return int
     */
    public function readByte()
    {
    }
    /**
     * @return int
     */
    public function readInt()
    {
    }
    /**
     * @return int
     */
    public function readLong()
    {
    }
    /**
     * @return float|false
     */
    public function readDouble()
    {
    }
    /**
     * @return string
     */
    public function readUTF()
    {
    }
    /**
     * @return string
     */
    public function readLongUTF()
    {
    }
    /**
     * @param int $length
     *
     * @return string
     */
    public function read($length)
    {
    }
    /**
     * @return int
     */
    public function peekByte()
    {
    }
    /**
     * @return int
     */
    public function peekInt()
    {
    }
    /**
     * @return int
     */
    public function peekLong()
    {
    }
    /**
     * @return float|false
     */
    public function peekDouble()
    {
    }
    /**
     * @return string
     */
    public function peekUTF()
    {
    }
    /**
     * @return string
     */
    public function peekLongUTF()
    {
    }
}