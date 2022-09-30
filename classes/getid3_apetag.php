<?php


/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at https://github.com/JamesHeinrich/getID3       //
//            or https://www.getid3.org                        //
//            or http://getid3.sourceforge.net                 //
//  see readme.txt for more details                            //
/////////////////////////////////////////////////////////////////
//                                                             //
// module.tag.apetag.php                                       //
// module for analyzing APE tags                               //
// dependencies: NONE                                          //
//                                                            ///
/////////////////////////////////////////////////////////////////
class getid3_apetag extends \getid3_handler
{
    /**
     * true: return full data for all attachments;
     * false: return no data for all attachments;
     * integer: return data for attachments <= than this;
     * string: save as file to this directory.
     *
     * @var int|bool|string
     */
    public $inline_attachments = \true;
    public $overrideendoffset = 0;
    /**
     * @return bool
     */
    public function Analyze()
    {
    }
    /**
     * @param string $APEheaderFooterData
     *
     * @return array|false
     */
    public function parseAPEheaderFooter($APEheaderFooterData)
    {
    }
    /**
     * @param int $rawflagint
     *
     * @return array
     */
    public function parseAPEtagFlags($rawflagint)
    {
    }
    /**
     * @param int $contenttypeid
     *
     * @return string
     */
    public function APEcontentTypeFlagLookup($contenttypeid)
    {
    }
    /**
     * @param string $itemkey
     *
     * @return bool
     */
    public function APEtagItemIsUTF8Lookup($itemkey)
    {
    }
}