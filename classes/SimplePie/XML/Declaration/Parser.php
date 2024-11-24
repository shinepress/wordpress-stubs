<?php

namespace SimplePie\XML\Declaration;

/**
 * Parses the XML Declaration
 *
 * @package SimplePie
 * @subpackage Parsing
 */
class Parser
{
    /**
     * XML Version
     *
     * @access public
     * @var string
     */
    public $version = '1.0';
    /**
     * Encoding
     *
     * @access public
     * @var string
     */
    public $encoding = 'UTF-8';
    /**
     * Standalone
     *
     * @access public
     * @var bool
     */
    public $standalone = false;
    /**
     * Current state of the state machine
     *
     * @access private
     * @var self::STATE_*
     */
    public $state = self::STATE_BEFORE_VERSION_NAME;
    /**
     * Input data
     *
     * @access private
     * @var string
     */
    public $data = '';
    /**
     * Input data length (to avoid calling strlen() everytime this is needed)
     *
     * @access private
     * @var int
     */
    public $data_length = 0;
    /**
     * Current position of the pointer
     *
     * @var int
     * @access private
     */
    public $position = 0;
    /**
     * Create an instance of the class with the input data
     *
     * @access public
     * @param string $data Input data
     */
    public function __construct($data)
    {
    }
    /**
     * Parse the input data
     *
     * @access public
     * @return bool true on success, false on failure
     */
    public function parse()
    {
    }
    /**
     * Check whether there is data beyond the pointer
     *
     * @access private
     * @return bool true if there is further data, false if not
     */
    public function has_data()
    {
    }
    /**
     * Advance past any whitespace
     *
     * @return int Number of whitespace characters passed
     */
    public function skip_whitespace()
    {
    }
    /**
     * Read value
     */
    public function get_value()
    {
    }
    public function before_version_name()
    {
    }
    public function version_name()
    {
    }
    public function version_equals()
    {
    }
    public function version_value()
    {
    }
    public function encoding_name()
    {
    }
    public function encoding_equals()
    {
    }
    public function encoding_value()
    {
    }
    public function standalone_name()
    {
    }
    public function standalone_equals()
    {
    }
    public function standalone_value()
    {
    }
}