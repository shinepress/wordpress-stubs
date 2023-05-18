<?php


class getid3_ac3 extends \getid3_handler
{
    const syncword = 0xb77;
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param int $fscod
     *
     * @return int|string|false
     */
    public static function sampleRateCodeLookup($fscod)
    {
    }
    /**
     * @param int $fscod2
     *
     * @return int|string|false
     */
    public static function sampleRateCodeLookup2($fscod2)
    {
    }
    /**
     * @param int $bsmod
     * @param int $acmod
     *
     * @return string|false
     */
    public static function serviceTypeLookup($bsmod, $acmod)
    {
    }
    /**
     * @param int $acmod
     *
     * @return array|false
     */
    public static function audioCodingModeLookup($acmod)
    {
    }
    /**
     * @param int $cmixlev
     *
     * @return int|float|string|false
     */
    public static function centerMixLevelLookup($cmixlev)
    {
    }
    /**
     * @param int $surmixlev
     *
     * @return int|float|string|false
     */
    public static function surroundMixLevelLookup($surmixlev)
    {
    }
    /**
     * @param int $dsurmod
     *
     * @return string|false
     */
    public static function dolbySurroundModeLookup($dsurmod)
    {
    }
    /**
     * @param int  $acmod
     * @param bool $lfeon
     *
     * @return array
     */
    public static function channelsEnabledLookup($acmod, $lfeon)
    {
    }
    /**
     * @param int $compre
     *
     * @return float|int
     */
    public static function heavyCompression($compre)
    {
    }
    /**
     * @param int $roomtyp
     *
     * @return string|false
     */
    public static function roomTypeLookup($roomtyp)
    {
    }
    /**
     * @param int $frmsizecod
     * @param int $fscod
     *
     * @return int|false
     */
    public static function frameSizeLookup($frmsizecod, $fscod)
    {
    }
    /**
     * @param int $frmsizecod
     *
     * @return int|false
     */
    public static function bitrateLookup($frmsizecod)
    {
    }
    /**
     * @param int $numblkscod
     *
     * @return int|false
     */
    public static function blocksPerSyncFrame($numblkscod)
    {
    }
}