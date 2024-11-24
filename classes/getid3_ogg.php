<?php


class getid3_ogg extends \getid3_handler
{
    /**
     * @link http://xiph.org/vorbis/doc/Vorbis_I_spec.html
     *
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param string $filedata
     * @param int    $filedataoffset
     * @param array  $oggpageinfo
     *
     * @return bool
     */
    public function ParseVorbisPageHeader(&$filedata, &$filedataoffset, &$oggpageinfo)
    {
    }
    /**
     * @link http://tools.ietf.org/html/draft-ietf-codec-oggopus-03
     *
     * @param string $filedata
     * @param int    $filedataoffset
     * @param array  $oggpageinfo
     *
     * @return bool
     */
    public function ParseOpusPageHeader(&$filedata, &$filedataoffset, &$oggpageinfo)
    {
    }
    /**
     * @return array|false
     */
    public function ParseOggPageHeader()
    {
    }
    /**
     * @link http://xiph.org/vorbis/doc/Vorbis_I_spec.html#x1-810005
     *
     * @return bool
     */
    public function ParseVorbisComments()
    {
    }
    /**
     * @param int $mode
     *
     * @return string|null
     */
    public static function SpeexBandModeLookup($mode)
    {
    }
    /**
     * @param array $OggInfoArray
     * @param int   $SegmentNumber
     *
     * @return int
     */
    public static function OggPageSegmentLength($OggInfoArray, $SegmentNumber = 1)
    {
    }
    /**
     * @param int $nominal_bitrate
     *
     * @return float
     */
    public static function get_quality_from_nominal_bitrate($nominal_bitrate)
    {
    }
    /**
     * @param int $colorspace_id
     *
     * @return string|null
     */
    public static function TheoraColorSpace($colorspace_id)
    {
    }
    /**
     * @param int $pixelformat_id
     *
     * @return string|null
     */
    public static function TheoraPixelFormat($pixelformat_id)
    {
    }
}