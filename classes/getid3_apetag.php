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
// module.tag.apetag.php                                       //
// module for analyzing APE tags                               //
// dependencies: NONE                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////
class getid3_apetag extends \getid3_handler
{
    public $inline_attachments = \true;
    // true: return full data for all attachments; false: return no data for all attachments; integer: return data for attachments <= than this; string: save as file to this directory
    public $overrideendoffset = 0;
    public function Analyze()
    {
    }
    public function parseAPEheaderFooter($APEheaderFooterData)
    {
    }
    public function parseAPEtagFlags($rawflagint)
    {
    }
    public function APEcontentTypeFlagLookup($contenttypeid)
    {
    }
    public function APEtagItemIsUTF8Lookup($itemkey)
    {
    }
}