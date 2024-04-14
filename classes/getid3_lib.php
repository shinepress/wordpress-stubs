<?php


/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at https://github.com/JamesHeinrich/getID3       //
//            or https://www.getid3.org                        //
//            or http://getid3.sourceforge.net                 //
//                                                             //
// getid3.lib.php - part of getID3()                           //
//  see readme.txt for more details                            //
//                                                            ///
/////////////////////////////////////////////////////////////////
class getid3_lib
{
    /**
     * @param string $string
     * @param bool   $hex
     * @param bool   $spaces
     * @param string $htmlencoding
     *
     * @return string
     */
    public static function PrintHexBytes($string, $hex = \true, $spaces = \true, $htmlencoding = 'UTF-8')
    {
    }
    /**
     * Truncates a floating-point number at the decimal point.
     *
     * @param float $floatnumber
     *
     * @return float|int returns int (if possible, otherwise float)
     */
    public static function trunc($floatnumber)
    {
    }
    /**
     * @param int|null $variable
     * @param int      $increment
     *
     * @return bool
     */
    public static function safe_inc(&$variable, $increment = 1)
    {
    }
    /**
     * @param int|float $floatnum
     *
     * @return int|float
     */
    public static function CastAsInt($floatnum)
    {
    }
    /**
     * @param int $num
     *
     * @return bool
     */
    public static function intValueSupported($num)
    {
    }
    /**
     * @param string $fraction
     *
     * @return float
     */
    public static function DecimalizeFraction($fraction)
    {
    }
    /**
     * @param string $binarynumerator
     *
     * @return float
     */
    public static function DecimalBinary2Float($binarynumerator)
    {
    }
    /**
     * @link http://www.scri.fsu.edu/~jac/MAD3401/Backgrnd/binary.html
     *
     * @param string $binarypointnumber
     * @param int    $maxbits
     *
     * @return array
     */
    public static function NormalizeBinaryPoint($binarypointnumber, $maxbits = 52)
    {
    }
    /**
     * @link http://www.scri.fsu.edu/~jac/MAD3401/Backgrnd/binary.html
     *
     * @param float $floatvalue
     *
     * @return string
     */
    public static function Float2BinaryDecimal($floatvalue)
    {
    }
    /**
     * @link http://www.scri.fsu.edu/~jac/MAD3401/Backgrnd/ieee-expl.html
     *
     * @param float $floatvalue
     * @param int $bits
     *
     * @return string|false
     */
    public static function Float2String($floatvalue, $bits)
    {
    }
    /**
     * @param string $byteword
     *
     * @return float|false
     */
    public static function LittleEndian2Float($byteword)
    {
    }
    /**
     * ANSI/IEEE Standard 754-1985, Standard for Binary Floating Point Arithmetic
     *
     * @link http://www.psc.edu/general/software/packages/ieee/ieee.html
     * @link http://www.scri.fsu.edu/~jac/MAD3401/Backgrnd/ieee.html
     *
     * @param string $byteword
     *
     * @return float|false
     */
    public static function BigEndian2Float($byteword)
    {
    }
    /**
     * @param string $byteword
     * @param bool   $synchsafe
     * @param bool   $signed
     *
     * @return int|float|false
     * @throws Exception
     */
    public static function BigEndian2Int($byteword, $synchsafe = \false, $signed = \false)
    {
    }
    /**
     * @param string $byteword
     * @param bool   $signed
     *
     * @return int|float|false
     */
    public static function LittleEndian2Int($byteword, $signed = \false)
    {
    }
    /**
     * @param string $byteword
     *
     * @return string
     */
    public static function LittleEndian2Bin($byteword)
    {
    }
    /**
     * @param string $byteword
     *
     * @return string
     */
    public static function BigEndian2Bin($byteword)
    {
    }
    /**
     * @param int  $number
     * @param int  $minbytes
     * @param bool $synchsafe
     * @param bool $signed
     *
     * @return string
     * @throws Exception
     */
    public static function BigEndian2String($number, $minbytes = 1, $synchsafe = \false, $signed = \false)
    {
    }
    /**
     * @param int $number
     *
     * @return string
     */
    public static function Dec2Bin($number)
    {
    }
    /**
     * @param string $binstring
     * @param bool   $signed
     *
     * @return int|float
     */
    public static function Bin2Dec($binstring, $signed = \false)
    {
    }
    /**
     * @param string $binstring
     *
     * @return string
     */
    public static function Bin2String($binstring)
    {
    }
    /**
     * @param int  $number
     * @param int  $minbytes
     * @param bool $synchsafe
     *
     * @return string
     */
    public static function LittleEndian2String($number, $minbytes = 1, $synchsafe = \false)
    {
    }
    /**
     * @param array $array1
     * @param array $array2
     *
     * @return array|false
     */
    public static function array_merge_clobber($array1, $array2)
    {
    }
    /**
     * @param array $array1
     * @param array $array2
     *
     * @return array|false
     */
    public static function array_merge_noclobber($array1, $array2)
    {
    }
    /**
     * @param array $array1
     * @param array $array2
     *
     * @return array|false|null
     */
    public static function flipped_array_merge_noclobber($array1, $array2)
    {
    }
    /**
     * @param array $theArray
     *
     * @return bool
     */
    public static function ksort_recursive(&$theArray)
    {
    }
    /**
     * @param string $filename
     * @param int    $numextensions
     *
     * @return string
     */
    public static function fileextension($filename, $numextensions = 1)
    {
    }
    /**
     * @param int $seconds
     *
     * @return string
     */
    public static function PlaytimeString($seconds)
    {
    }
    /**
     * @param int $macdate
     *
     * @return int|float
     */
    public static function DateMac2Unix($macdate)
    {
    }
    /**
     * @param string $rawdata
     *
     * @return float
     */
    public static function FixedPoint8_8($rawdata)
    {
    }
    /**
     * @param string $rawdata
     *
     * @return float
     */
    public static function FixedPoint16_16($rawdata)
    {
    }
    /**
     * @param string $rawdata
     *
     * @return float
     */
    public static function FixedPoint2_30($rawdata)
    {
    }
    /**
     * @param string $ArrayPath
     * @param string $Separator
     * @param mixed $Value
     *
     * @return array
     */
    public static function CreateDeepArray($ArrayPath, $Separator, $Value)
    {
    }
    /**
     * @param array $arraydata
     * @param bool  $returnkey
     *
     * @return int|false
     */
    public static function array_max($arraydata, $returnkey = \false)
    {
    }
    /**
     * @param array $arraydata
     * @param bool  $returnkey
     *
     * @return int|false
     */
    public static function array_min($arraydata, $returnkey = \false)
    {
    }
    /**
     * @param string $XMLstring
     *
     * @return array|false
     */
    public static function XML2array($XMLstring)
    {
    }
    /**
     * @param SimpleXMLElement|array $XMLobject
     *
     * @return array
     */
    public static function SimpleXMLelement2array($XMLobject)
    {
    }
    /**
     * Returns checksum for a file from starting position to absolute end position.
     *
     * @param string $file
     * @param int    $offset
     * @param int    $end
     * @param string $algorithm
     *
     * @return string|false
     * @throws getid3_exception
     */
    public static function hash_data($file, $offset, $end, $algorithm)
    {
    }
    /**
     * @param string $filename_source
     * @param string $filename_dest
     * @param int    $offset
     * @param int    $length
     *
     * @return bool
     * @throws Exception
     *
     * @deprecated Unused, may be removed in future versions of getID3
     */
    public static function CopyFileParts($filename_source, $filename_dest, $offset, $length)
    {
    }
    /**
     * @param int $charval
     *
     * @return string
     */
    public static function iconv_fallback_int_utf8($charval)
    {
    }
    /**
     * ISO-8859-1 => UTF-8
     *
     * @param string $string
     * @param bool   $bom
     *
     * @return string
     */
    public static function iconv_fallback_iso88591_utf8($string, $bom = \false)
    {
    }
    /**
     * ISO-8859-1 => UTF-16BE
     *
     * @param string $string
     * @param bool   $bom
     *
     * @return string
     */
    public static function iconv_fallback_iso88591_utf16be($string, $bom = \false)
    {
    }
    /**
     * ISO-8859-1 => UTF-16LE
     *
     * @param string $string
     * @param bool   $bom
     *
     * @return string
     */
    public static function iconv_fallback_iso88591_utf16le($string, $bom = \false)
    {
    }
    /**
     * ISO-8859-1 => UTF-16LE (BOM)
     *
     * @param string $string
     *
     * @return string
     */
    public static function iconv_fallback_iso88591_utf16($string)
    {
    }
    /**
     * UTF-8 => ISO-8859-1
     *
     * @param string $string
     *
     * @return string
     */
    public static function iconv_fallback_utf8_iso88591($string)
    {
    }
    /**
     * UTF-8 => UTF-16BE
     *
     * @param string $string
     * @param bool   $bom
     *
     * @return string
     */
    public static function iconv_fallback_utf8_utf16be($string, $bom = \false)
    {
    }
    /**
     * UTF-8 => UTF-16LE
     *
     * @param string $string
     * @param bool   $bom
     *
     * @return string
     */
    public static function iconv_fallback_utf8_utf16le($string, $bom = \false)
    {
    }
    /**
     * UTF-8 => UTF-16LE (BOM)
     *
     * @param string $string
     *
     * @return string
     */
    public static function iconv_fallback_utf8_utf16($string)
    {
    }
    /**
     * UTF-16BE => UTF-8
     *
     * @param string $string
     *
     * @return string
     */
    public static function iconv_fallback_utf16be_utf8($string)
    {
    }
    /**
     * UTF-16LE => UTF-8
     *
     * @param string $string
     *
     * @return string
     */
    public static function iconv_fallback_utf16le_utf8($string)
    {
    }
    /**
     * UTF-16BE => ISO-8859-1
     *
     * @param string $string
     *
     * @return string
     */
    public static function iconv_fallback_utf16be_iso88591($string)
    {
    }
    /**
     * UTF-16LE => ISO-8859-1
     *
     * @param string $string
     *
     * @return string
     */
    public static function iconv_fallback_utf16le_iso88591($string)
    {
    }
    /**
     * UTF-16 (BOM) => ISO-8859-1
     *
     * @param string $string
     *
     * @return string
     */
    public static function iconv_fallback_utf16_iso88591($string)
    {
    }
    /**
     * UTF-16 (BOM) => UTF-8
     *
     * @param string $string
     *
     * @return string
     */
    public static function iconv_fallback_utf16_utf8($string)
    {
    }
    /**
     * @param string $in_charset
     * @param string $out_charset
     * @param string $string
     *
     * @return string
     * @throws Exception
     */
    public static function iconv_fallback($in_charset, $out_charset, $string)
    {
    }
    /**
     * @param mixed  $data
     * @param string $charset
     *
     * @return mixed
     */
    public static function recursiveMultiByteCharString2HTML($data, $charset = 'ISO-8859-1')
    {
    }
    /**
     * @param string|int|float $string
     * @param string           $charset
     *
     * @return string
     */
    public static function MultiByteCharString2HTML($string, $charset = 'ISO-8859-1')
    {
    }
    /**
     * @param int $namecode
     *
     * @return string
     */
    public static function RGADnameLookup($namecode)
    {
    }
    /**
     * @param int $originatorcode
     *
     * @return string
     */
    public static function RGADoriginatorLookup($originatorcode)
    {
    }
    /**
     * @param int $rawadjustment
     * @param int $signbit
     *
     * @return float
     */
    public static function RGADadjustmentLookup($rawadjustment, $signbit)
    {
    }
    /**
     * @param int $namecode
     * @param int $originatorcode
     * @param int $replaygain
     *
     * @return string
     */
    public static function RGADgainString($namecode, $originatorcode, $replaygain)
    {
    }
    /**
     * @param float $amplitude
     *
     * @return float
     */
    public static function RGADamplitude2dB($amplitude)
    {
    }
    /**
     * @param string $imgData
     * @param array  $imageinfo
     *
     * @return array|false
     */
    public static function GetDataImageSize($imgData, &$imageinfo = array())
    {
    }
    /**
     * @param string $mime_type
     *
     * @return string
     */
    public static function ImageExtFromMime($mime_type)
    {
    }
    /**
     * @param array $ThisFileInfo
     *
     * @return bool
     */
    public static function CopyTagsToComments(&$ThisFileInfo)
    {
    }
    /**
     * @param string $key
     * @param int    $begin
     * @param int    $end
     * @param string $file
     * @param string $name
     *
     * @return string
     */
    public static function EmbeddedLookup($key, $begin, $end, $file, $name)
    {
    }
    /**
     * @param string $filename
     * @param string $sourcefile
     * @param bool   $DieOnFailure
     *
     * @return bool
     * @throws Exception
     */
    public static function IncludeDependency($filename, $sourcefile, $DieOnFailure = \false)
    {
    }
    /**
     * @param string $string
     *
     * @return string
     */
    public static function trimNullByte($string)
    {
    }
    /**
     * @param string $path
     *
     * @return float|bool
     */
    public static function getFileSizeSyscall($path)
    {
    }
    /**
     * @param string $filename
     *
     * @return string|false
     */
    public static function truepath($filename)
    {
    }
    /**
     * Workaround for Bug #37268 (https://bugs.php.net/bug.php?id=37268)
     *
     * @param string $path A path.
     * @param string $suffix If the name component ends in suffix this will also be cut off.
     *
     * @return string
     */
    public static function mb_basename($path, $suffix = \null)
    {
    }
}