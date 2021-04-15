<?php


abstract class getid3_handler
{
    /**
     * @var getID3
     */
    protected $getid3;
    // pointer
    /**
     * Analyzing filepointer or string.
     *
     * @var bool
     */
    protected $data_string_flag = \false;
    /**
     * String to analyze.
     *
     * @var string
     */
    protected $data_string = '';
    /**
     * Seek position in string.
     *
     * @var int
     */
    protected $data_string_position = 0;
    /**
     * String length.
     *
     * @var int
     */
    protected $data_string_length = 0;
    /**
     * @var string
     */
    private $dependency_to;
    /**
     * getid3_handler constructor.
     *
     * @param getID3 $getid3
     * @param string $call_module
     */
    public function __construct(\getID3 $getid3, $call_module = \null)
    {
    }
    /**
     * Analyze from file pointer.
     *
     * @return bool
     */
    abstract public function Analyze();
    /**
     * Analyze from string instead.
     *
     * @param string $string
     */
    public function AnalyzeString($string)
    {
    }
    /**
     * @param string $string
     */
    public function setStringMode($string)
    {
    }
    /**
     * @return int|bool
     */
    protected function ftell()
    {
    }
    /**
     * @param int $bytes
     *
     * @return string|false
     *
     * @throws getid3_exception
     */
    protected function fread($bytes)
    {
    }
    /**
     * @param int $bytes
     * @param int $whence
     *
     * @return int
     *
     * @throws getid3_exception
     */
    protected function fseek($bytes, $whence = \SEEK_SET)
    {
    }
    /**
     * @return string|false
     *
     * @throws getid3_exception
     */
    protected function fgets()
    {
    }
    /**
     * @return bool
     */
    protected function feof()
    {
    }
    /**
     * @param string $module
     *
     * @return bool
     */
    final protected function isDependencyFor($module)
    {
    }
    /**
     * @param string $text
     *
     * @return bool
     */
    protected function error($text)
    {
    }
    /**
     * @param string $text
     *
     * @return bool
     */
    protected function warning($text)
    {
    }
    /**
     * @param string $text
     */
    protected function notice($text)
    {
    }
    /**
     * @param string $name
     * @param int    $offset
     * @param int    $length
     * @param string $image_mime
     *
     * @return string|null
     *
     * @throws Exception
     * @throws getid3_exception
     */
    public function saveAttachment($name, $offset, $length, $image_mime = \null)
    {
    }
}