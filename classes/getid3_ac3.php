<?php


/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
// See readme.txt for more details                             //
/////////////////////////////////////////////////////////////////
//                                                             //
// module.audio.ac3.php                                        //
// module for analyzing AC-3 (aka Dolby Digital) audio files   //
// dependencies: NONE                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////
class getid3_ac3 extends \getid3_handler
{
    private $AC3header = array();
    private $BSIoffset = 0;
    const syncword = 0xb77;
    public function Analyze()
    {
    }
    private function readHeaderBSI($length)
    {
    }
    public static function sampleRateCodeLookup($fscod)
    {
    }
    public static function sampleRateCodeLookup2($fscod2)
    {
    }
    public static function serviceTypeLookup($bsmod, $acmod)
    {
    }
    public static function audioCodingModeLookup($acmod)
    {
    }
    public static function centerMixLevelLookup($cmixlev)
    {
    }
    public static function surroundMixLevelLookup($surmixlev)
    {
    }
    public static function dolbySurroundModeLookup($dsurmod)
    {
    }
    public static function channelsEnabledLookup($acmod, $lfeon)
    {
    }
    public static function heavyCompression($compre)
    {
    }
    public static function roomTypeLookup($roomtyp)
    {
    }
    public static function frameSizeLookup($frmsizecod, $fscod)
    {
    }
    public static function bitrateLookup($frmsizecod)
    {
    }
    public static function blocksPerSyncFrame($numblkscod)
    {
    }
}