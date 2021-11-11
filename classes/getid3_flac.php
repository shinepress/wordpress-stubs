<?php


/**
 * @tutorial http://flac.sourceforge.net/format.html
 */
class getid3_flac extends \getid3_handler
{
    const syncword = 'fLaC';
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @return bool
     */
    public function parseMETAdata()
    {
    }
    /**
     * @param string $BlockData
     *
     * @return array
     */
    public static function parseSTREAMINFOdata($BlockData)
    {
    }
    /**
     * @param string $BlockData
     *
     * @return bool
     */
    private function parseSTREAMINFO($BlockData)
    {
    }
    /**
     * @param string $BlockData
     *
     * @return bool
     */
    private function parseAPPLICATION($BlockData)
    {
    }
    /**
     * @param string $BlockData
     *
     * @return bool
     */
    private function parseSEEKTABLE($BlockData)
    {
    }
    /**
     * @param string $BlockData
     *
     * @return bool
     */
    private function parseVORBIS_COMMENT($BlockData)
    {
    }
    /**
     * @param string $BlockData
     *
     * @return bool
     */
    private function parseCUESHEET($BlockData)
    {
    }
    /**
     * Parse METADATA_BLOCK_PICTURE flac structure and extract attachment
     * External usage: audio.ogg
     *
     * @return bool
     */
    public function parsePICTURE()
    {
    }
    /**
     * @param int $blocktype
     *
     * @return string
     */
    public static function metaBlockTypeLookup($blocktype)
    {
    }
    /**
     * @param int $applicationid
     *
     * @return string
     */
    public static function applicationIDLookup($applicationid)
    {
    }
    /**
     * @param int $type_id
     *
     * @return string
     */
    public static function pictureTypeLookup($type_id)
    {
    }
}