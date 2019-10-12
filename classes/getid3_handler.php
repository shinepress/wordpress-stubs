<?php


abstract class getid3_handler
{
    /**
     * @var getID3
     */
    protected $getid3;
    // pointer
    protected $data_string_flag = \false;
    // analyzing filepointer or string
    protected $data_string = '';
    // string to analyze
    protected $data_string_position = 0;
    // seek position in string
    protected $data_string_length = 0;
    // string length
    private $dependency_to = \null;
    public function __construct(\getID3 $getid3, $call_module = \null)
    {
    }
    // Analyze from file pointer
    abstract public function Analyze();
    // Analyze from string instead
    public function AnalyzeString($string)
    {
    }
    public function setStringMode($string)
    {
    }
    protected function ftell()
    {
    }
    protected function fread($bytes)
    {
    }
    protected function fseek($bytes, $whence = \SEEK_SET)
    {
    }
    protected function feof()
    {
    }
    final protected function isDependencyFor($module)
    {
    }
    protected function error($text)
    {
    }
    protected function warning($text)
    {
    }
    protected function notice($text)
    {
    }
    public function saveAttachment($name, $offset, $length, $image_mime = \null)
    {
    }
}