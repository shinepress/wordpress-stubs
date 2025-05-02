<?php


class getid3_riff extends \getid3_handler
{
    protected $container = 'riff';
    /**
     * @return bool
     *
     * @throws getid3_exception
     */
    public function Analyze()
    {
    }
    /**
     * @param int $startoffset
     * @param int $maxoffset
     *
     * @return array|false
     *
     * @throws Exception
     * @throws getid3_exception
     */
    public function ParseRIFFAMV($startoffset, $maxoffset)
    {
    }
    /**
     * @param int $startoffset
     * @param int $maxoffset
     *
     * @return array|false
     * @throws getid3_exception
     */
    public function ParseRIFF($startoffset, $maxoffset)
    {
    }
    /**
     * @param string $RIFFdata
     *
     * @return bool
     */
    public function ParseRIFFdata(&$RIFFdata)
    {
    }
    /**
     * @param array $RIFFinfoArray
     * @param array $CommentsTargetArray
     *
     * @return bool
     */
    public static function parseComments(&$RIFFinfoArray, &$CommentsTargetArray)
    {
    }
    /**
     * @param string $WaveFormatExData
     *
     * @return array
     */
    public static function parseWAVEFORMATex($WaveFormatExData)
    {
    }
    /**
     * @param string $WavPackChunkData
     *
     * @return bool
     */
    public function parseWavPackHeader($WavPackChunkData)
    {
    }
    /**
     * @param string $BITMAPINFOHEADER
     * @param bool   $littleEndian
     *
     * @return array
     */
    public static function ParseBITMAPINFOHEADER($BITMAPINFOHEADER, $littleEndian = \true)
    {
    }
    /**
     * @param string $DIVXTAG
     * @param bool   $raw
     *
     * @return array
     */
    public static function ParseDIVXTAG($DIVXTAG, $raw = \false)
    {
    }
    /**
     * @param string $tagshortname
     *
     * @return string
     */
    public static function waveSNDMtagLookup($tagshortname)
    {
    }
    /**
     * @param int $wFormatTag
     *
     * @return string
     */
    public static function wFormatTagLookup($wFormatTag)
    {
    }
    /**
     * @param string $fourcc
     *
     * @return string
     */
    public static function fourccLookup($fourcc)
    {
    }
}