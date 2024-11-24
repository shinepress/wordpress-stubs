<?php

namespace SimplePie;

/**
 * Decode 'gzip' encoded HTTP data
 *
 * @package SimplePie
 * @subpackage HTTP
 * @link http://www.gzip.org/format.txt
 */
class Gzdecode
{
    /**
     * Compressed data
     *
     * @access private
     * @var string
     * @see gzdecode::$data
     */
    public $compressed_data;
    /**
     * Size of compressed data
     *
     * @access private
     * @var int
     */
    public $compressed_size;
    /**
     * Minimum size of a valid gzip string
     *
     * @access private
     * @var int
     */
    public $min_compressed_size = 18;
    /**
     * Current position of pointer
     *
     * @access private
     * @var int
     */
    public $position = 0;
    /**
     * Flags (FLG)
     *
     * @access private
     * @var int
     */
    public $flags;
    /**
     * Uncompressed data
     *
     * @access public
     * @see gzdecode::$compressed_data
     * @var string
     */
    public $data;
    /**
     * Modified time
     *
     * @access public
     * @var int
     */
    public $MTIME;
    /**
     * Extra Flags
     *
     * @access public
     * @var int
     */
    public $XFL;
    /**
     * Operating System
     *
     * @access public
     * @var int
     */
    public $OS;
    /**
     * Subfield ID 1
     *
     * @access public
     * @see gzdecode::$extra_field
     * @see gzdecode::$SI2
     * @var string
     */
    public $SI1;
    /**
     * Subfield ID 2
     *
     * @access public
     * @see gzdecode::$extra_field
     * @see gzdecode::$SI1
     * @var string
     */
    public $SI2;
    /**
     * Extra field content
     *
     * @access public
     * @see gzdecode::$SI1
     * @see gzdecode::$SI2
     * @var string
     */
    public $extra_field;
    /**
     * Original filename
     *
     * @access public
     * @var string
     */
    public $filename;
    /**
     * Human readable comment
     *
     * @access public
     * @var string
     */
    public $comment;
    /**
     * Don't allow anything to be set
     *
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
    }
    /**
     * Set the compressed string and related properties
     *
     * @param string $data
     */
    public function __construct($data)
    {
    }
    /**
     * Decode the GZIP stream
     *
     * @return bool Successfulness
     */
    public function parse()
    {
    }
}