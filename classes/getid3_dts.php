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
// module.audio.dts.php                                        //
// module for analyzing DTS Audio files                        //
// dependencies: NONE                                          //
//                                                             //
/////////////////////////////////////////////////////////////////
/**
* @tutorial http://wiki.multimedia.cx/index.php?title=DTS
*/
class getid3_dts extends \getid3_handler
{
    /**
     * Default DTS syncword used in native .cpt or .dts formats
     */
    const syncword = "\xfe\x80\x01";
    /**
     * Possible syncwords indicating bitstream encoding
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
    // 14-bit little-endian
    public function Analyze()
    {
    }
    public static function bitrateLookup($index)
    {
    }
    public static function sampleRateLookup($index)
    {
    }
    public static function bitPerSampleLookup($index)
    {
    }
    public static function numChannelsLookup($index)
    {
    }
    public static function channelArrangementLookup($index)
    {
    }
    public static function dialogNormalization($index, $version)
    {
    }
}