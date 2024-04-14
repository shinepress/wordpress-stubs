<?php


// End: Defines
class getID3
{
    /*
     * Settings
     */
    /**
     * CASE SENSITIVE! - i.e. (must be supported by iconv()). Examples:  ISO-8859-1  UTF-8  UTF-16  UTF-16BE
     *
     * @var string
     */
    public $encoding = 'UTF-8';
    /**
     * Should always be 'ISO-8859-1', but some tags may be written in other encodings such as 'EUC-CN' or 'CP1252'
     *
     * @var string
     */
    public $encoding_id3v1 = 'ISO-8859-1';
    /**
     * ID3v1 should always be 'ISO-8859-1', but some tags may be written in other encodings such as 'Windows-1251' or 'KOI8-R'. If true attempt to detect these encodings, but may return incorrect values for some tags actually in ISO-8859-1 encoding
     *
     * @var bool
     */
    public $encoding_id3v1_autodetect = \false;
    /*
     * Optional tag checks - disable for speed.
     */
    /**
     * Read and process ID3v1 tags
     *
     * @var bool
     */
    public $option_tag_id3v1 = \true;
    /**
     * Read and process ID3v2 tags
     *
     * @var bool
     */
    public $option_tag_id3v2 = \true;
    /**
     * Read and process Lyrics3 tags
     *
     * @var bool
     */
    public $option_tag_lyrics3 = \true;
    /**
     * Read and process APE tags
     *
     * @var bool
     */
    public $option_tag_apetag = \true;
    /**
     * Copy tags to root key 'tags' and encode to $this->encoding
     *
     * @var bool
     */
    public $option_tags_process = \true;
    /**
     * Copy tags to root key 'tags_html' properly translated from various encodings to HTML entities
     *
     * @var bool
     */
    public $option_tags_html = \true;
    /*
     * Optional tag/comment calculations
     */
    /**
     * Calculate additional info such as bitrate, channelmode etc
     *
     * @var bool
     */
    public $option_extra_info = \true;
    /*
     * Optional handling of embedded attachments (e.g. images)
     */
    /**
     * Defaults to true (ATTACHMENTS_INLINE) for backward compatibility
     *
     * @var bool|string
     */
    public $option_save_attachments = \true;
    /*
     * Optional calculations
     */
    /**
     * Get MD5 sum of data part - slow
     *
     * @var bool
     */
    public $option_md5_data = \false;
    /**
     * Use MD5 of source file if availble - only FLAC and OptimFROG
     *
     * @var bool
     */
    public $option_md5_data_source = \false;
    /**
     * Get SHA1 sum of data part - slow
     *
     * @var bool
     */
    public $option_sha1_data = \false;
    /**
     * Check whether file is larger than 2GB and thus not supported by 32-bit PHP (null: auto-detect based on
     * PHP_INT_MAX)
     *
     * @var bool|null
     */
    public $option_max_2gb_check;
    /**
     * Read buffer size in bytes
     *
     * @var int
     */
    public $option_fread_buffer_size = 32768;
    // Public variables
    /**
     * Filename of file being analysed.
     *
     * @var string
     */
    public $filename;
    /**
     * Filepointer to file being analysed.
     *
     * @var resource
     */
    public $fp;
    /**
     * Result array.
     *
     * @var array
     */
    public $info;
    /**
     * @var string
     */
    public $tempdir = \GETID3_TEMP_DIR;
    /**
     * @var int
     */
    public $memory_limit = 0;
    /**
     * @var string
     */
    protected $startup_error = '';
    /**
     * @var string
     */
    protected $startup_warning = '';
    const VERSION = '1.9.20-202006061653';
    const FREAD_BUFFER_SIZE = 32768;
    const ATTACHMENTS_NONE = \false;
    const ATTACHMENTS_INLINE = \true;
    public function __construct()
    {
    }
    /**
     * @return string
     */
    public function version()
    {
    }
    /**
     * @return int
     */
    public function fread_buffer_size()
    {
    }
    /**
     * @param array $optArray
     *
     * @return bool
     */
    public function setOption($optArray)
    {
    }
    /**
     * @param string   $filename
     * @param int      $filesize
     * @param resource $fp
     *
     * @return bool
     *
     * @throws getid3_exception
     */
    public function openfile($filename, $filesize = \null, $fp = \null)
    {
    }
    /**
     * analyze file
     *
     * @param string   $filename
     * @param int      $filesize
     * @param string   $original_filename
     * @param resource $fp
     *
     * @return array
     */
    public function analyze($filename, $filesize = \null, $original_filename = '', $fp = \null)
    {
    }
    /**
     * Error handling.
     *
     * @param string $message
     *
     * @return array
     */
    public function error($message)
    {
    }
    /**
     * Warning handling.
     *
     * @param string $message
     *
     * @return bool
     */
    public function warning($message)
    {
    }
    /**
     * Return array containing information about all supported formats.
     *
     * @return array
     */
    public function GetFileFormatArray()
    {
    }
    /**
     * @param string $filedata
     * @param string $filename
     *
     * @return mixed|false
     */
    public function GetFileFormat(&$filedata, $filename = '')
    {
    }
    /**
     * Converts array to $encoding charset from $this->encoding.
     *
     * @param array  $array
     * @param string $encoding
     * @phpstan-return void
     */
    public function CharConvert(&$array, $encoding)
    {
    }
    /**
     * @return bool
     */
    public function HandleAllTags()
    {
    }
    /**
     * Calls getid3_lib::CopyTagsToComments() but passes in the option_tags_html setting from this instance of getID3
     *
     * @param array $ThisFileInfo
     *
     * @return bool
     */
    public function CopyTagsToComments(&$ThisFileInfo)
    {
    }
    /**
     * @param string $algorithm
     *
     * @return array|bool
     */
    public function getHashdata($algorithm)
    {
    }
    public function ChannelsBitratePlaytimeCalculations()
    {
    }
    /**
     * @return bool
     */
    public function CalculateCompressionRatioVideo()
    {
    }
    /**
     * @return bool
     */
    public function CalculateCompressionRatioAudio()
    {
    }
    /**
     * @return bool
     */
    public function CalculateReplayGain()
    {
    }
    /**
     * @return bool
     */
    public function ProcessAudioStreams()
    {
    }
    /**
     * @return string|bool
     */
    public function getid3_tempnam()
    {
    }
    /**
     * @param string $name
     *
     * @return bool
     *
     * @throws getid3_exception
     */
    public function include_module($name)
    {
    }
    /**
     * @param string $filename
     *
     * @return bool
     */
    public static function is_writable($filename)
    {
    }
}