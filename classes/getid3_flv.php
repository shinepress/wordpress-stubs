<?php


class getid3_flv extends \getid3_handler
{
    const magic = 'FLV';
    public $max_frames = 100000;
    // break out of the loop if too many frames have been scanned; only scan this many if meta frame does not contain useful duration
    public function Analyze()
    {
    }
    public static function audioFormatLookup($id)
    {
    }
    public static function audioRateLookup($id)
    {
    }
    public static function audioBitDepthLookup($id)
    {
    }
    public static function videoCodecLookup($id)
    {
    }
}