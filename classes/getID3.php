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
    // module-specific options
    /** archive.rar
     * if true use PHP RarArchive extension, if false (non-extension parsing not yet written in getID3)
     *
     * @var bool
     */
    public $options_archive_rar_use_php_rar_extension = \true;
    /** archive.gzip
     * Optional file list - disable for speed.
     * Decode gzipped files, if possible, and parse recursively (.tar.gz for example).
     *
     * @var bool
     */
    public $options_archive_gzip_parse_contents = \false;
    /** audio.midi
     * if false only parse most basic information, much faster for some files but may be inaccurate
     *
     * @var bool
     */
    public $options_audio_midi_scanwholefile = \true;
    /** audio.mp3
     * Forces getID3() to scan the file byte-by-byte and log all the valid audio frame headers - extremely slow,
     * unrecommended, but may provide data from otherwise-unusable files.
     *
     * @var bool
     */
    public $options_audio_mp3_allow_bruteforce = \false;
    /** audio.mp3
     * number of frames to scan to determine if MPEG-audio sequence is valid
     * Lower this number to 5-20 for faster scanning
     * Increase this number to 50+ for most accurate detection of valid VBR/CBR mpeg-audio streams
     *
     * @var int
     */
    public $options_audio_mp3_mp3_valid_check_frames = 50;
    /** audio.wavpack
     * Avoid scanning all frames (break after finding ID_RIFF_HEADER and ID_CONFIG_BLOCK,
     * significantly faster for very large files but other data may be missed
     *
     * @var bool
     */
    public $options_audio_wavpack_quick_parsing = \false;
    /** audio-video.flv
     * Break out of the loop if too many frames have been scanned; only scan this
     * many if meta frame does not contain useful duration.
     *
     * @var int
     */
    public $options_audiovideo_flv_max_frames = 100000;
    /** audio-video.matroska
     * If true, do not return information about CLUSTER chunks, since there's a lot of them
     * and they're not usually useful [default: TRUE].
     *
     * @var bool
     */
    public $options_audiovideo_matroska_hide_clusters = \true;
    /** audio-video.matroska
     * True to parse the whole file, not only header [default: FALSE].
     *
     * @var bool
     */
    public $options_audiovideo_matroska_parse_whole_file = \false;
    /** audio-video.quicktime
     * return all parsed data from all atoms if true, otherwise just returned parsed metadata
     *
     * @var bool
     */
    public $options_audiovideo_quicktime_ReturnAtomData = \false;
    /** audio-video.quicktime
     * return all parsed data from all atoms if true, otherwise just returned parsed metadata
     *
     * @var bool
     */
    public $options_audiovideo_quicktime_ParseAllPossibleAtoms = \false;
    /** audio-video.swf
     * return all parsed tags if true, otherwise do not return tags not parsed by getID3
     *
     * @var bool
     */
    public $options_audiovideo_swf_ReturnAllTagData = \false;
    /** graphic.bmp
     * return BMP palette
     *
     * @var bool
     */
    public $options_graphic_bmp_ExtractPalette = \false;
    /** graphic.bmp
     * return image data
     *
     * @var bool
     */
    public $options_graphic_bmp_ExtractData = \false;
    /** graphic.png
     * If data chunk is larger than this do not read it completely (getID3 only needs the first
     * few dozen bytes for parsing).
     *
     * @var int
     */
    public $options_graphic_png_max_data_bytes = 10000000;
    /** misc.pdf
     * return full details of PDF Cross-Reference Table (XREF)
     *
     * @var bool
     */
    public $options_misc_pdf_returnXREF = \false;
    /** misc.torrent
     * Assume all .torrent files are less than 1MB and just read entire thing into memory for easy processing.
     * Override this value if you need to process files larger than 1MB
     *
     * @var int
     */
    public $options_misc_torrent_max_torrent_filesize = 1048576;
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
    const VERSION = '1.9.21-202109171300';
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