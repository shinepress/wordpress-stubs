<?php


class getid3_flv extends \getid3_handler
{
    const magic = 'FLV';
    /**
     * Break out of the loop if too many frames have been scanned; only scan this
     * many if meta frame does not contain useful duration.
     *
     * @var int
     */
    public $max_frames = 100000;
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param int $id
     *
     * @return string|false
     */
    public static function audioFormatLookup($id)
    {
    }
    /**
     * @param int $id
     *
     * @return int|false
     */
    public static function audioRateLookup($id)
    {
    }
    /**
     * @param int $id
     *
     * @return int|false
     */
    public static function audioBitDepthLookup($id)
    {
    }
    /**
     * @param int $id
     *
     * @return string|false
     */
    public static function videoCodecLookup($id)
    {
    }
}