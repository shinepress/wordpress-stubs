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
    /**
     * If true, do not return information about CLUSTER chunks, since there's a lot of them
     * and they're not usually useful [default: TRUE].
     *
     * @var bool
     */
    public static $hide_clusters = \true;
    /**
     * True to parse the whole file, not only header [default: FALSE].
     *
     * @var bool
     */
    public static $parse_whole_file = \false;
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param int $target_type
     *
     * @return string|int
     */
    public static function TargetTypeValue($target_type)
    {
    }
    /**
     * @param int $lacingtype
     *
     * @return string|int
     */
    public static function BlockLacingType($lacingtype)
    {
    }
    /**
     * @param string $codecid
     *
     * @return string
     */
    public static function CodecIDtoCommonName($codecid)
    {
    }
    /**
     * @param int $value
     *
     * @return string
     */
    public static function displayUnit($value)
    {
    }
}