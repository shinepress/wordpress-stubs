<?php


class getid3_mp3 extends \getid3_handler
{
    /**
     * Forces getID3() to scan the file byte-by-byte and log all the valid audio frame headers - extremely slow,
     * unrecommended, but may provide data from otherwise-unusable files.
     *
     * @var bool
     */
    public $allow_bruteforce = \false;
    /**
     * number of frames to scan to determine if MPEG-audio sequence is valid
     * Lower this number to 5-20 for faster scanning
     * Increase this number to 50+ for most accurate detection of valid VBR/CBR mpeg-audio streams
     *
     * @var int
     */
    public $mp3_valid_check_frames = 50;
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @return string
     */
    public function GuessEncoderOptions()
    {
    }
    /**
     * @param int   $offset
     * @param array $info
     * @param bool  $recursivesearch
     * @param bool  $ScanAsCBR
     * @param bool  $FastMPEGheaderScan
     *
     * @return bool
     */
    public function decodeMPEGaudioHeader($offset, &$info, $recursivesearch = \true, $ScanAsCBR = \false, $FastMPEGheaderScan = \false)
    {
    }
    /**
     * @param int $offset
     * @param int $nextframetestoffset
     * @param bool $ScanAsCBR
     *
     * @return bool
     */
    public function RecursiveFrameScanning(&$offset, &$nextframetestoffset, $ScanAsCBR)
    {
    }
    /**
     * @param int  $offset
     * @param bool $deepscan
     *
     * @return int|false
     */
    public function FreeFormatFrameLength($offset, $deepscan = \false)
    {
    }
    /**
     * @return bool
     */
    public function getOnlyMPEGaudioInfoBruteForce()
    {
    }
    /**
     * @param int  $avdataoffset
     * @param bool $BitrateHistogram
     *
     * @return bool
     */
    public function getOnlyMPEGaudioInfo($avdataoffset, $BitrateHistogram = \false)
    {
    }
    /**
     * @return array
     */
    public static function MPEGaudioVersionArray()
    {
    }
    /**
     * @return array
     */
    public static function MPEGaudioLayerArray()
    {
    }
    /**
     * @return array
     */
    public static function MPEGaudioBitrateArray()
    {
    }
    /**
     * @return array
     */
    public static function MPEGaudioFrequencyArray()
    {
    }
    /**
     * @return array
     */
    public static function MPEGaudioChannelModeArray()
    {
    }
    /**
     * @return array
     */
    public static function MPEGaudioModeExtensionArray()
    {
    }
    /**
     * @return array
     */
    public static function MPEGaudioEmphasisArray()
    {
    }
    /**
     * @param string $head4
     * @param bool   $allowBitrate15
     *
     * @return bool
     */
    public static function MPEGaudioHeaderBytesValid($head4, $allowBitrate15 = \false)
    {
    }
    /**
     * @param array $rawarray
     * @param bool  $echoerrors
     * @param bool  $allowBitrate15
     *
     * @return bool
     */
    public static function MPEGaudioHeaderValid($rawarray, $echoerrors = \false, $allowBitrate15 = \false)
    {
    }
    /**
     * @param string $Header4Bytes
     *
     * @return array|false
     */
    public static function MPEGaudioHeaderDecode($Header4Bytes)
    {
    }
    /**
     * @param int|string $bitrate
     * @param string     $version
     * @param string     $layer
     * @param bool       $padding
     * @param int        $samplerate
     *
     * @return int|false
     */
    public static function MPEGaudioFrameLength(&$bitrate, &$version, &$layer, $padding, &$samplerate)
    {
    }
    /**
     * @param float|int $bit_rate
     *
     * @return int|float|string
     */
    public static function ClosestStandardMP3Bitrate($bit_rate)
    {
    }
    /**
     * @param string $version
     * @param string $channelmode
     *
     * @return int
     */
    public static function XingVBRidOffset($version, $channelmode)
    {
    }
    /**
     * @param int $VBRmethodID
     *
     * @return string
     */
    public static function LAMEvbrMethodLookup($VBRmethodID)
    {
    }
    /**
     * @param int $StereoModeID
     *
     * @return string
     */
    public static function LAMEmiscStereoModeLookup($StereoModeID)
    {
    }
    /**
     * @param int $SourceSampleFrequencyID
     *
     * @return string
     */
    public static function LAMEmiscSourceSampleFrequencyLookup($SourceSampleFrequencyID)
    {
    }
    /**
     * @param int $SurroundInfoID
     *
     * @return string
     */
    public static function LAMEsurroundInfoLookup($SurroundInfoID)
    {
    }
    /**
     * @param array $LAMEtag
     *
     * @return string
     */
    public static function LAMEpresetUsedLookup($LAMEtag)
    {
    }
}