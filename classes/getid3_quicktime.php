<?php


// needed for ISO 639-2 language code lookup
class getid3_quicktime extends \getid3_handler
{
    /** audio-video.quicktime
     * return all parsed data from all atoms if true, otherwise just returned parsed metadata
     *
     * @var bool
     */
    public $ReturnAtomData = \false;
    /** audio-video.quicktime
     * return all parsed data from all atoms if true, otherwise just returned parsed metadata
     *
     * @var bool
     */
    public $ParseAllPossibleAtoms = \false;
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param string $atomname
     * @param int    $atomsize
     * @param string $atom_data
     * @param int    $baseoffset
     * @param array  $atomHierarchy
     * @param bool   $ParseAllPossibleAtoms
     *
     * @return array|false
     */
    public function QuicktimeParseAtom($atomname, $atomsize, $atom_data, $baseoffset, &$atomHierarchy, $ParseAllPossibleAtoms)
    {
    }
    /**
     * @param string $atom_data
     * @param int    $baseoffset
     * @param array  $atomHierarchy
     * @param bool   $ParseAllPossibleAtoms
     *
     * @return array|false
     */
    public function QuicktimeParseContainerAtom($atom_data, $baseoffset, &$atomHierarchy, $ParseAllPossibleAtoms)
    {
    }
    /**
     * @param string $data
     * @param int    $offset
     *
     * @return int
     */
    public function quicktime_read_mp4_descr_length($data, &$offset)
    {
    }
    /**
     * @param int $languageid
     *
     * @return string
     */
    public function QuicktimeLanguageLookup($languageid)
    {
    }
    /**
     * @param string $codecid
     *
     * @return string
     */
    public function QuicktimeVideoCodecLookup($codecid)
    {
    }
    /**
     * @param string $codecid
     *
     * @return mixed|string
     */
    public function QuicktimeAudioCodecLookup($codecid)
    {
    }
    /**
     * @param string $compressionid
     *
     * @return string
     */
    public function QuicktimeDCOMLookup($compressionid)
    {
    }
    /**
     * @param int $colordepthid
     *
     * @return string
     */
    public function QuicktimeColorNameLookup($colordepthid)
    {
    }
    /**
     * @param int $stik
     *
     * @return string
     */
    public function QuicktimeSTIKLookup($stik)
    {
    }
    /**
     * @param int $audio_profile_id
     *
     * @return string
     */
    public function QuicktimeIODSaudioProfileName($audio_profile_id)
    {
    }
    /**
     * @param int $video_profile_id
     *
     * @return string
     */
    public function QuicktimeIODSvideoProfileName($video_profile_id)
    {
    }
    /**
     * @param int $rtng
     *
     * @return string
     */
    public function QuicktimeContentRatingLookup($rtng)
    {
    }
    /**
     * @param int $akid
     *
     * @return string
     */
    public function QuicktimeStoreAccountTypeLookup($akid)
    {
    }
    /**
     * @param int $sfid
     *
     * @return string
     */
    public function QuicktimeStoreFrontCodeLookup($sfid)
    {
    }
    /**
     * @param string $keyname
     * @param string|array $data
     * @param string $boxname
     *
     * @return bool
     */
    public function CopyToAppropriateCommentsSection($keyname, $data, $boxname = '')
    {
    }
    /**
     * @param string $lstring
     * @param int    $count
     *
     * @return string
     */
    public function LociString($lstring, &$count)
    {
    }
    /**
     * @param string $nullterminatedstring
     *
     * @return string
     */
    public function NoNullString($nullterminatedstring)
    {
    }
    /**
     * @param string $pascalstring
     *
     * @return string
     */
    public function Pascal2String($pascalstring)
    {
    }
    /**
     * @param string $pascalstring
     *
     * @return string
     */
    public function MaybePascal2String($pascalstring)
    {
    }
    /**
     * Helper functions for m4b audiobook chapters
     * code by Steffen Hartmann 2015-Nov-08.
     *
     * @param array  $info
     * @param string $tag
     * @param string $history
     * @param array  $result
     */
    public function search_tag_by_key($info, $tag, $history, &$result)
    {
    }
    /**
     * @param array  $info
     * @param string $k
     * @param string $v
     * @param string $history
     * @param array  $result
     */
    public function search_tag_by_pair($info, $k, $v, $history, &$result)
    {
    }
    /**
     * @param array $info
     *
     * @return array
     */
    public function quicktime_time_to_sample_table($info)
    {
    }
    /**
     * @param array $info
     *
     * @return int
     */
    public function quicktime_bookmark_time_scale($info)
    {
    }
    /*
    // END helper functions for m4b audiobook chapters
    */
}