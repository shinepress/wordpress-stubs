<?php


/**
 * @tutorial http://wiki.multimedia.cx/index.php?title=DTS
 */
class getid3_dts extends \getid3_handler
{
    /**
     * Default DTS syncword used in native .cpt or .dts formats.
     */
    const syncword = "\xfe\x80\x01";
    /**
     * Possible syncwords indicating bitstream encoding.
     */
    public static $syncwords = array(
        0 => "\xfe\x80\x01",
        // raw big-endian
        1 => "\xfe\x01\x80",
        // raw little-endian
        2 => "\x1f\xff\xe8\x00",
        // 14-bit big-endian
        3 => "\xff\x1f\x00\xe8",
    );
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param int $index
     *
     * @return int|string|false
     */
    public static function bitrateLookup($index)
    {
    }
    /**
     * @param int $index
     *
     * @return int|string|false
     */
    public static function sampleRateLookup($index)
    {
    }
    /**
     * @param int $index
     *
     * @return int|false
     */
    public static function bitPerSampleLookup($index)
    {
    }
    /**
     * @param int $index
     *
     * @return int|false
     */
    public static function numChannelsLookup($index)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public static function channelArrangementLookup($index)
    {
    }
    /**
     * @param int $index
     * @param int $version
     *
     * @return int|false
     */
    public static function dialogNormalization($index, $version)
    {
    }
}