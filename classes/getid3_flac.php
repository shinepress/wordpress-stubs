<?php


/**
* @tutorial http://flac.sourceforge.net/format.html
*/
class getid3_flac extends \getid3_handler
{
    const syncword = 'fLaC';
    public function Analyze()
    {
    }
    public function parseMETAdata()
    {
    }
    private function parseSTREAMINFO($BlockData)
    {
    }
    private function parseAPPLICATION($BlockData)
    {
    }
    private function parseSEEKTABLE($BlockData)
    {
    }
    private function parseVORBIS_COMMENT($BlockData)
    {
    }
    private function parseCUESHEET($BlockData)
    {
    }
    /**
     * Parse METADATA_BLOCK_PICTURE flac structure and extract attachment
     * External usage: audio.ogg
     */
    public function parsePICTURE()
    {
    }
    public static function metaBlockTypeLookup($blocktype)
    {
    }
    public static function applicationIDLookup($applicationid)
    {
    }
    public static function pictureTypeLookup($type_id)
    {
    }
}