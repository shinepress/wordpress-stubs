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
    /*
     * Private parser settings/placeholders.
     */
    private $EBMLbuffer = '';
    private $EBMLbuffer_offset = 0;
    private $EBMLbuffer_length = 0;
    private $current_offset = 0;
    private $unuseful_elements = array(\EBML_ID_CRC32, \EBML_ID_VOID);
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param array $info
     */
    private function parseEBML(&$info)
    {
    }
    /**
     * @param int $min_data
     *
     * @return bool
     */
    private function EnsureBufferHasEnoughData($min_data = 1024)
    {
    }
    /**
     * @return int|float|false
     */
    private function readEBMLint()
    {
    }
    /**
     * @param int  $length
     * @param bool $check_buffer
     *
     * @return string|false
     */
    private function readEBMLelementData($length, $check_buffer = \false)
    {
    }
    /**
     * @param array      $element
     * @param int        $parent_end
     * @param array|bool $get_data
     *
     * @return bool
     */
    private function getEBMLelement(&$element, $parent_end, $get_data = \false)
    {
    }
    /**
     * @param string $type
     * @param int    $line
     * @param array  $element
     */
    private function unhandledElement($type, $line, $element)
    {
    }
    /**
     * @param array $SimpleTagArray
     *
     * @return bool
     */
    private function ExtractCommentsSimpleTag($SimpleTagArray)
    {
    }
    /**
     * @param int $parent_end
     *
     * @return array
     */
    private function HandleEMBLSimpleTag($parent_end)
    {
    }
    /**
     * @param array $element
     * @param int   $block_type
     * @param array $info
     *
     * @return array
     */
    private function HandleEMBLClusterBlock($element, $block_type, &$info)
    {
    }
    /**
     * @param string $EBMLstring
     *
     * @return int|float|false
     */
    private static function EBML2Int($EBMLstring)
    {
    }
    /**
     * @param int $EBMLdatestamp
     *
     * @return float
     */
    private static function EBMLdate2unix($EBMLdatestamp)
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
    private static function EBMLidName($value)
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
    /**
     * @param array $streams
     *
     * @return array
     */
    private static function getDefaultStreamInfo($streams)
    {
    }
}