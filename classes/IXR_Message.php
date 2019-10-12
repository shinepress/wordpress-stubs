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
    // methodCall / methodResponse / fault
    var $faultCode = \false;
    var $faultString = \false;
    var $methodName = '';
    var $params = array();
    // Current variable stacks
    var $_arraystructs = array();
    // The stack used to keep track of the current array/struct
    var $_arraystructstypes = array();
    // Stack keeping track of if things are structs or array
    var $_currentStructName = array();
    // A stack as well
    var $_param;
    var $_value;
    var $_currentTag;
    var $_currentTagContents;
    // The XML parser
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