<?php


class getid3_id3v2 extends \getid3_handler
{
    public $StartingOffset = 0;
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param string $genrestring
     *
     * @return array
     */
    public function ParseID3v2GenreString($genrestring)
    {
    }
    /**
     * @param array $parsedFrame
     *
     * @return bool
     */
    public function ParseID3v2Frame(&$parsedFrame)
    {
    }
    /**
     * @param string $data
     *
     * @return string
     */
    public function DeUnsynchronise($data)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public function LookupExtendedHeaderRestrictionsTagSizeLimits($index)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public function LookupExtendedHeaderRestrictionsTextEncodings($index)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public function LookupExtendedHeaderRestrictionsTextFieldSize($index)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public function LookupExtendedHeaderRestrictionsImageEncoding($index)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public function LookupExtendedHeaderRestrictionsImageSizeSize($index)
    {
    }
    /**
     * @param string $currencyid
     *
     * @return string
     */
    public function LookupCurrencyUnits($currencyid)
    {
    }
    /**
     * @param string $currencyid
     *
     * @return string
     */
    public function LookupCurrencyCountry($currencyid)
    {
    }
    /**
     * @param string $languagecode
     * @param bool   $casesensitive
     *
     * @return string
     */
    public static function LanguageLookup($languagecode, $casesensitive = \false)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public static function ETCOEventLookup($index)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public static function SYTLContentTypeLookup($index)
    {
    }
    /**
     * @param int   $index
     * @param bool $returnarray
     *
     * @return array|string
     */
    public static function APICPictureTypeLookup($index, $returnarray = \false)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public static function COMRReceivedAsLookup($index)
    {
    }
    /**
     * @param int $index
     *
     * @return string
     */
    public static function RVA2ChannelTypeLookup($index)
    {
    }
    /**
     * @param string $framename
     *
     * @return string
     */
    public static function FrameNameLongLookup($framename)
    {
    }
    /**
     * @param string $framename
     *
     * @return string
     */
    public static function FrameNameShortLookup($framename)
    {
    }
    /**
     * @param string $encoding
     *
     * @return string
     */
    public static function TextEncodingTerminatorLookup($encoding)
    {
    }
    /**
     * @param int $encoding
     *
     * @return string
     */
    public static function TextEncodingNameLookup($encoding)
    {
    }
    /**
     * @param string $string
     * @param string $terminator
     *
     * @return string
     */
    public static function RemoveStringTerminator($string, $terminator)
    {
    }
    /**
     * @param string $string
     *
     * @return string
     */
    public static function MakeUTF16emptyStringEmpty($string)
    {
    }
    /**
     * @param string $framename
     * @param int    $id3v2majorversion
     *
     * @return bool|int
     */
    public static function IsValidID3v2FrameName($framename, $id3v2majorversion)
    {
    }
    /**
     * @param string $numberstring
     * @param bool   $allowdecimal
     * @param bool   $allownegative
     *
     * @return bool
     */
    public static function IsANumber($numberstring, $allowdecimal = \false, $allownegative = \false)
    {
    }
    /**
     * @param string $datestamp
     *
     * @return bool
     */
    public static function IsValidDateStampString($datestamp)
    {
    }
    /**
     * @param int $majorversion
     *
     * @return int
     */
    public static function ID3v2HeaderLength($majorversion)
    {
    }
    /**
     * @param string $frame_name
     *
     * @return string|false
     */
    public static function ID3v22iTunesBrokenFrameName($frame_name)
    {
    }
}