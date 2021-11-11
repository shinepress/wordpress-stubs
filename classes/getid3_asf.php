<?php


class getid3_asf extends \getid3_handler
{
    /**
     * @param getID3 $getid3
     */
    public function __construct(\getID3 $getid3)
    {
    }
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param int $CodecListType
     *
     * @return string
     */
    public static function codecListObjectTypeLookup($CodecListType)
    {
    }
    /**
     * @return array
     */
    public static function KnownGUIDs()
    {
    }
    /**
     * @param string $GUIDstring
     *
     * @return string|false
     */
    public static function GUIDname($GUIDstring)
    {
    }
    /**
     * @param int $id
     *
     * @return string
     */
    public static function ASFIndexObjectIndexTypeLookup($id)
    {
    }
    /**
     * @param string $GUIDstring
     *
     * @return string
     */
    public static function GUIDtoBytestring($GUIDstring)
    {
    }
    /**
     * @param string $Bytestring
     *
     * @return string
     */
    public static function BytestringToGUID($Bytestring)
    {
    }
    /**
     * @param int  $FILETIME
     * @param bool $round
     *
     * @return float|int
     */
    public static function FILETIMEtoUNIXtime($FILETIME, $round = \true)
    {
    }
    /**
     * @param int $WMpictureType
     *
     * @return string
     */
    public static function WMpictureTypeLookup($WMpictureType)
    {
    }
    /**
     * @param string $asf_header_extension_object_data
     * @param int    $unhandled_sections
     *
     * @return array
     */
    public function HeaderExtensionObjectDataParse(&$asf_header_extension_object_data, &$unhandled_sections)
    {
    }
    /**
     * @param int $id
     *
     * @return string
     */
    public static function metadataLibraryObjectDataTypeLookup($id)
    {
    }
    /**
     * @param string $data
     *
     * @return array
     */
    public function ASF_WMpicture(&$data)
    {
    }
    /**
     * Remove terminator 00 00 and convert UTF-16LE to Latin-1.
     *
     * @param string $string
     *
     * @return string
     */
    public static function TrimConvert($string)
    {
    }
    /**
     * Remove terminator 00 00.
     *
     * @param string $string
     *
     * @return string
     */
    public static function TrimTerm($string)
    {
    }
}