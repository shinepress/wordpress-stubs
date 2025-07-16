<?php


/**
 * IXR_MESSAGE
 *
 * @package IXR
 * @since 1.5.0
 *
 */
class IXR_Message
{
    var $message = \false;
    var $messageType = \false;
    var $faultCode = \false;
    var $faultString = \false;
    var $methodName = '';
    var $params = array();
    var $_arraystructs = array();
    var $_arraystructstypes = array();
    var $_currentStructName = array();
    var $_param;
    var $_value;
    var $_currentTag;
    var $_currentTagContents;
    var $_parser;
    /**
     * PHP5 constructor.
     */
    function __construct($message)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function IXR_Message($message)
    {
    }
    function parse()
    {
    }
    function tag_open($parser, $tag, $attr)
    {
    }
    function cdata($parser, $cdata)
    {
    }
    function tag_close($parser, $tag)
    {
    }
}