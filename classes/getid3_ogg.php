<?php


class getid3_ogg extends \getid3_handler
{
    // http://xiph.org/vorbis/doc/Vorbis_I_spec.html
    public function Analyze()
    {
    }
    public function ParseVorbisPageHeader(&$filedata, &$filedataoffset, &$oggpageinfo)
    {
    }
    // http://tools.ietf.org/html/draft-ietf-codec-oggopus-03
    public function ParseOpusPageHeader(&$filedata, &$filedataoffset, &$oggpageinfo)
    {
    }
    public function ParseOggPageHeader()
    {
    }
    // http://xiph.org/vorbis/doc/Vorbis_I_spec.html#x1-810005
    public function ParseVorbisComments()
    {
    }
    public static function SpeexBandModeLookup($mode)
    {
    }
    public static function OggPageSegmentLength($OggInfoArray, $SegmentNumber = 1)
    {
    }
    public static function get_quality_from_nominal_bitrate($nominal_bitrate)
    {
    }
    public static function TheoraColorSpace($colorspace_id)
    {
    }
    public static function TheoraPixelFormat($pixelformat_id)
    {
    }
}