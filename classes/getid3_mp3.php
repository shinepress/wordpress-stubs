<?php


class getid3_mp3 extends \getid3_handler
{
    public $allow_bruteforce = \false;
    // forces getID3() to scan the file byte-by-byte and log all the valid audio frame headers - extremely slow, unrecommended, but may provide data from otherwise-unusuable files
    public function Analyze()
    {
    }
    public function GuessEncoderOptions()
    {
    }
    public function decodeMPEGaudioHeader($offset, &$info, $recursivesearch = \true, $ScanAsCBR = \false, $FastMPEGheaderScan = \false)
    {
    }
    public function RecursiveFrameScanning(&$offset, &$nextframetestoffset, $ScanAsCBR)
    {
    }
    public function FreeFormatFrameLength($offset, $deepscan = \false)
    {
    }
    public function getOnlyMPEGaudioInfoBruteForce()
    {
    }
    public function getOnlyMPEGaudioInfo($avdataoffset, $BitrateHistogram = \false)
    {
    }
    public static function MPEGaudioVersionArray()
    {
    }
    public static function MPEGaudioLayerArray()
    {
    }
    public static function MPEGaudioBitrateArray()
    {
    }
    public static function MPEGaudioFrequencyArray()
    {
    }
    public static function MPEGaudioChannelModeArray()
    {
    }
    public static function MPEGaudioModeExtensionArray()
    {
    }
    public static function MPEGaudioEmphasisArray()
    {
    }
    public static function MPEGaudioHeaderBytesValid($head4, $allowBitrate15 = \false)
    {
    }
    public static function MPEGaudioHeaderValid($rawarray, $echoerrors = \false, $allowBitrate15 = \false)
    {
    }
    public static function MPEGaudioHeaderDecode($Header4Bytes)
    {
    }
    public static function MPEGaudioFrameLength(&$bitrate, &$version, &$layer, $padding, &$samplerate)
    {
    }
    public static function ClosestStandardMP3Bitrate($bit_rate)
    {
    }
    public static function XingVBRidOffset($version, $channelmode)
    {
    }
    public static function LAMEvbrMethodLookup($VBRmethodID)
    {
    }
    public static function LAMEmiscStereoModeLookup($StereoModeID)
    {
    }
    public static function LAMEmiscSourceSampleFrequencyLookup($SourceSampleFrequencyID)
    {
    }
    public static function LAMEsurroundInfoLookup($SurroundInfoID)
    {
    }
    public static function LAMEpresetUsedLookup($LAMEtag)
    {
    }
}