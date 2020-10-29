<?php


/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at https://github.com/JamesHeinrich/getID3       //
//            or https://www.getid3.org                        //
//            or http://getid3.sourceforge.net                 //
//  see readme.txt for more details                            //
/////////////////////////////////////////////////////////////////
///                                                            //
// module.tag.lyrics3.php                                      //
// module for analyzing Lyrics3 tags                           //
// dependencies: module.tag.apetag.php (optional)              //
//                                                            ///
/////////////////////////////////////////////////////////////////
class getid3_lyrics3 extends \getid3_handler
{
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param int $endoffset
     * @param int $version
     * @param int $length
     *
     * @return bool
     */
    public function getLyrics3Data($endoffset, $version, $length)
    {
    }
    /**
     * @param string $rawtimestamp
     *
     * @return int|false
     */
    public function Lyrics3Timestamp2Seconds($rawtimestamp)
    {
    }
    /**
     * @param array $Lyrics3data
     *
     * @return bool
     */
    public function Lyrics3LyricsTimestampParse(&$Lyrics3data)
    {
    }
    /**
     * @param string $char
     *
     * @return bool|null
     */
    public function IntString2Bool($char)
    {
    }
}