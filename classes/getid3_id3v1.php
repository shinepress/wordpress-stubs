<?php


class getid3_id3v1 extends \getid3_handler
{
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param string $str
     *
     * @return string
     */
    public static function cutfield($str)
    {
    }
    /**
     * @param bool $allowSCMPXextended
     *
     * @return string[]
     */
    public static function ArrayOfGenres($allowSCMPXextended = \false)
    {
    }
    /**
     * @param string $genreid
     * @param bool   $allowSCMPXextended
     *
     * @return string|false
     */
    public static function LookupGenreName($genreid, $allowSCMPXextended = \true)
    {
    }
    /**
     * @param string $genre
     * @param bool   $allowSCMPXextended
     *
     * @return string|false
     */
    public static function LookupGenreID($genre, $allowSCMPXextended = \false)
    {
    }
    /**
     * @param string $OriginalGenre
     *
     * @return string|false
     */
    public static function StandardiseID3v1GenreName($OriginalGenre)
    {
    }
    /**
     * @param string     $title
     * @param string     $artist
     * @param string     $album
     * @param string     $year
     * @param int        $genreid
     * @param string     $comment
     * @param int|string $track
     *
     * @return string
     */
    public static function GenerateID3v1Tag($title, $artist, $album, $year, $genreid, $comment, $track = '')
    {
    }
}