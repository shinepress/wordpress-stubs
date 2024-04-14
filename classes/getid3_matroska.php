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
    public function Analyze()
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
    public static function displayUnit($value)
    {
    }
}