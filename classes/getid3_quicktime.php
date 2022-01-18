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
    public function NoNullString($nullterminatedstring)
    {
    }
    public function Pascal2String($pascalstring)
    {
    }
}