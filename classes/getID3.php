<?php


// End: Defines
class getID3
{
    // public: Settings
    public $encoding = 'UTF-8';
    // CASE SENSITIVE! - i.e. (must be supported by iconv()). Examples:  ISO-8859-1  UTF-8  UTF-16  UTF-16BE
    public $encoding_id3v1 = 'ISO-8859-1';
    // Should always be 'ISO-8859-1', but some tags may be written in other encodings such as 'EUC-CN' or 'CP1252'
    // public: Optional tag checks - disable for speed.
    public $option_tag_id3v1 = \true;
    // Read and process ID3v1 tags
    public $option_tag_id3v2 = \true;
    // Read and process ID3v2 tags
    public $option_tag_lyrics3 = \true;
    // Read and process Lyrics3 tags
    public $option_tag_apetag = \true;
    // Read and process APE tags
    public $option_tags_process = \true;
    // Copy tags to root key 'tags' and encode to $this->encoding
    public $option_tags_html = \true;
    // Copy tags to root key 'tags_html' properly translated from various encodings to HTML entities
    // public: Optional tag/comment calucations
    public $option_extra_info = \true;
    // Calculate additional info such as bitrate, channelmode etc
    // public: Optional handling of embedded attachments (e.g. images)
    public $option_save_attachments = \true;
    // defaults to true (ATTACHMENTS_INLINE) for backward compatibility
    // public: Optional calculations
    public $option_md5_data = \false;
    // Get MD5 sum of data part - slow
    public $option_md5_data_source = \false;
    // Use MD5 of source file if availble - only FLAC and OptimFROG
    public $option_sha1_data = \false;
    // Get SHA1 sum of data part - slow
    public $option_max_2gb_check = \null;
    // Check whether file is larger than 2GB and thus not supported by 32-bit PHP (null: auto-detect based on PHP_INT_MAX)
    // public: Read buffer size in bytes
    public $option_fread_buffer_size = 32768;
    // Public variables
    public $filename;
    // Filename of file being analysed.
    public $fp;
    // Filepointer to file being analysed.
    public $info;
    // Result array.
    public $tempdir = \GETID3_TEMP_DIR;
    public $memory_limit = 0;
    // Protected variables
    protected $startup_error = '';
    protected $startup_warning = '';
    const VERSION = '1.9.14-201706111222';
    const FREAD_BUFFER_SIZE = 32768;
    const ATTACHMENTS_NONE = \false;
    const ATTACHMENTS_INLINE = \true;
    // public: constructor
    public function __construct()
    {
    }
    public function version()
    {
    }
    public function fread_buffer_size()
    {
    }
    // public: setOption
    public function setOption($optArray)
    {
    }
    public function openfile($filename, $filesize = \null)
    {
    }
    // public: analyze file
    public function analyze($filename, $filesize = \null, $original_filename = '')
    {
    }
    // private: error handling
    public function error($message)
    {
    }
    // private: warning handling
    public function warning($message)
    {
    }
    // return array containing information about all supported formats
    public function GetFileFormatArray()
    {
    }
    public function GetFileFormat(&$filedata, $filename = '')
    {
    }
    // converts array to $encoding charset from $this->encoding
    public function CharConvert(&$array, $encoding)
    {
    }
    public function HandleAllTags()
    {
    }
    public function getHashdata($algorithm)
    {
    }
    public function ChannelsBitratePlaytimeCalculations()
    {
    }
    public function CalculateCompressionRatioVideo()
    {
    }
    public function CalculateCompressionRatioAudio()
    {
    }
    public function CalculateReplayGain()
    {
    }
    public function ProcessAudioStreams()
    {
    }
    public function getid3_tempnam()
    {
    }
    public function include_module($name)
    {
    }
    public static function is_writable($filename)
    {
    }
}