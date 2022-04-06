<?php


// needed for ISO 639-2 language code lookup
class getid3_quicktime extends \getid3_handler
{
    public $ReturnAtomData = \true;
    public $ParseAllPossibleAtoms = \false;
    public function Analyze()
    {
    }
    public function QuicktimeParseAtom($atomname, $atomsize, $atom_data, $baseoffset, &$atomHierarchy, $ParseAllPossibleAtoms)
    {
    }
    public function QuicktimeParseContainerAtom($atom_data, $baseoffset, &$atomHierarchy, $ParseAllPossibleAtoms)
    {
    }
    public function quicktime_read_mp4_descr_length($data, &$offset)
    {
    }
    public function QuicktimeLanguageLookup($languageid)
    {
    }
    public function QuicktimeVideoCodecLookup($codecid)
    {
    }
    public function QuicktimeAudioCodecLookup($codecid)
    {
    }
    public function QuicktimeDCOMLookup($compressionid)
    {
    }
    public function QuicktimeColorNameLookup($colordepthid)
    {
    }
    public function QuicktimeSTIKLookup($stik)
    {
    }
    public function QuicktimeIODSaudioProfileName($audio_profile_id)
    {
    }
    public function QuicktimeIODSvideoProfileName($video_profile_id)
    {
    }
    public function QuicktimeContentRatingLookup($rtng)
    {
    }
    public function QuicktimeStoreAccountTypeLookup($akid)
    {
    }
    public function QuicktimeStoreFrontCodeLookup($sfid)
    {
    }
    public function QuicktimeParseNikonNCTG($atom_data)
    {
    }
    public function CopyToAppropriateCommentsSection($keyname, $data, $boxname = '')
    {
    }
    public function LociString($lstring, &$count)
    {
    }
    public function NoNullString($nullterminatedstring)
    {
    }
    public function Pascal2String($pascalstring)
    {
    }
    /*
    // helper functions for m4b audiobook chapters
    // code by Steffen Hartmann 2015-Nov-08
    */
    public function search_tag_by_key($info, $tag, $history, &$result)
    {
    }
    public function search_tag_by_pair($info, $k, $v, $history, &$result)
    {
    }
    public function quicktime_time_to_sample_table($info)
    {
    }
    function quicktime_bookmark_time_scale($info)
    {
    }
    /*
    // END helper functions for m4b audiobook chapters
    */
}