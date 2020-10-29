<?php


//             [FD] -- Relative position of the data that should be in position of the virtual block.
/**
* @tutorial http://www.matroska.org/technical/specs/index.html
*
* @todo Rewrite EBML parser to reduce it's size and honor default element values
* @todo After rewrite implement stream size calculation, that will provide additional useful info and enable AAC/FLAC audio bitrate detection
*/
class getid3_matroska extends \getid3_handler
{
    // public options
    public static $hide_clusters = \true;
    // if true, do not return information about CLUSTER chunks, since there's a lot of them and they're not usually useful [default: TRUE]
    public static $parse_whole_file = \false;
    // true to parse the whole file, not only header [default: FALSE]
    // private parser settings/placeholders
    private $EBMLbuffer = '';
    private $EBMLbuffer_offset = 0;
    private $EBMLbuffer_length = 0;
    private $current_offset = 0;
    private $unuseful_elements = array(\EBML_ID_CRC32, \EBML_ID_VOID);
    public function Analyze()
    {
    }
    private function parseEBML(&$info)
    {
    }
    private function EnsureBufferHasEnoughData($min_data = 1024)
    {
    }
    private function readEBMLint()
    {
    }
    private function readEBMLelementData($length, $check_buffer = \false)
    {
    }
    private function getEBMLelement(&$element, $parent_end, $get_data = \false)
    {
    }
    private function unhandledElement($type, $line, $element)
    {
    }
    private function ExtractCommentsSimpleTag($SimpleTagArray)
    {
    }
    private function HandleEMBLSimpleTag($parent_end)
    {
    }
    private function HandleEMBLClusterBlock($element, $block_type, &$info)
    {
    }
    private static function EBML2Int($EBMLstring)
    {
    }
    private static function EBMLdate2unix($EBMLdatestamp)
    {
    }
    public static function TargetTypeValue($target_type)
    {
    }
    public static function BlockLacingType($lacingtype)
    {
    }
    public static function CodecIDtoCommonName($codecid)
    {
    }
    private static function EBMLidName($value)
    {
    }
    public static function displayUnit($value)
    {
    }
    private static function getDefaultStreamInfo($streams)
    {
    }
}