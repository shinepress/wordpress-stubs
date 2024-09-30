<?php


/* For future use
   define( 'PCLZIP_CB_PRE_LIST', 78005 );
   define( 'PCLZIP_CB_POST_LIST', 78006 );
   define( 'PCLZIP_CB_PRE_DELETE', 78007 );
   define( 'PCLZIP_CB_POST_DELETE', 78008 );
   */
class PclZip
{
    var $zipname = '';
    var $zip_fd = 0;
    var $error_code = 1;
    var $error_string = '';
    var $magic_quotes_status;
    function __construct($p_zipname)
    {
    }
    public function PclZip($p_zipname)
    {
    }
    function create($p_filelist)
    {
    }
    function add($p_filelist)
    {
    }
    function listContent()
    {
    }
    function extract()
    {
    }
    function extractByIndex($p_index)
    {
    }
    function delete()
    {
    }
    function deleteByIndex($p_index)
    {
    }
    function properties()
    {
    }
    function duplicate($p_archive)
    {
    }
    function merge($p_archive_to_add)
    {
    }
    function errorCode()
    {
    }
    function errorName($p_with_code = \false)
    {
    }
    function errorInfo($p_full = \false)
    {
    }
    function privCheckFormat($p_level = 0)
    {
    }
    function privParseOptions(&$p_options_list, $p_size, &$v_result_list, $v_requested_options = \false)
    {
    }
    function privOptionDefaultThreshold(&$p_options)
    {
    }
    function privFileDescrParseAtt(&$p_file_list, &$p_filedescr, $v_options, $v_requested_options = \false)
    {
    }
    function privFileDescrExpand(&$p_filedescr_list, &$p_options)
    {
    }
    function privCreate($p_filedescr_list, &$p_result_list, &$p_options)
    {
    }
    function privAdd($p_filedescr_list, &$p_result_list, &$p_options)
    {
    }
    function privOpenFd($p_mode)
    {
    }
    function privCloseFd()
    {
    }
    function privAddList($p_filedescr_list, &$p_result_list, &$p_options)
    {
    }
    function privAddFileList($p_filedescr_list, &$p_result_list, &$p_options)
    {
    }
    function privAddFile($p_filedescr, &$p_header, &$p_options)
    {
    }
    function privAddFileUsingTempFile($p_filedescr, &$p_header, &$p_options)
    {
    }
    function privCalculateStoredFilename(&$p_filedescr, &$p_options)
    {
    }
    function privWriteFileHeader(&$p_header)
    {
    }
    function privWriteCentralFileHeader(&$p_header)
    {
    }
    function privWriteCentralHeader($p_nb_entries, $p_size, $p_offset, $p_comment)
    {
    }
    function privList(&$p_list)
    {
    }
    function privConvertHeader2FileInfo($p_header, &$p_info)
    {
    }
    function privExtractByRule(&$p_file_list, $p_path, $p_remove_path, $p_remove_all_path, &$p_options)
    {
    }
    function privExtractFile(&$p_entry, $p_path, $p_remove_path, $p_remove_all_path, &$p_options)
    {
    }
    function privExtractFileUsingTempFile(&$p_entry, &$p_options)
    {
    }
    function privExtractFileInOutput(&$p_entry, &$p_options)
    {
    }
    function privExtractFileAsString(&$p_entry, &$p_string, &$p_options)
    {
    }
    function privReadFileHeader(&$p_header)
    {
    }
    function privReadCentralFileHeader(&$p_header)
    {
    }
    function privCheckFileHeaders(&$p_local_header, &$p_central_header)
    {
    }
    function privReadEndCentralDir(&$p_central_dir)
    {
    }
    function privDeleteByRule(&$p_result_list, &$p_options)
    {
    }
    function privDirCheck($p_dir, $p_is_dir = \false)
    {
    }
    function privMerge(&$p_archive_to_add)
    {
    }
    function privDuplicate($p_archive_filename)
    {
    }
    function privErrorLog($p_error_code = 0, $p_error_string = '')
    {
    }
    function privErrorReset()
    {
    }
    function privDisableMagicQuotes()
    {
    }
    function privSwapBackMagicQuotes()
    {
    }
    // --------------------------------------------------------------------------------
}