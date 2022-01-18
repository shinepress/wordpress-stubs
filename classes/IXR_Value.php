<?php


/**
 * IXR_Value
 *
 * @package IXR
 * @since 1.5.0
 */
class IXR_Value
{
    var $data;
    var $type;
    /**
     * PHP5 constructor.
     */
    function __construct($data, $type = \false)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function IXR_Value($data, $type = \false)
    {
    }
    function calculateType()
    {
    }
    function getXml()
    {
    }
    /**
     * Checks whether or not the supplied array is a struct or not
     *
     * @param array $array
     * @return bool
     */
    function isStruct($array)
    {
    }
}