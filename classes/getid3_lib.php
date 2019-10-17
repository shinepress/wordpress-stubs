<?php


/////////////////////////////////////////////////////////////////
/// getID3() by James Heinrich <info@getid3.org>               //
//  available at http://getid3.sourceforge.net                 //
//            or http://www.getid3.org                         //
//          also https://github.com/JamesHeinrich/getID3       //
/////////////////////////////////////////////////////////////////
//                                                             //
// getid3.lib.php - part of getID3()                           //
// See readme.txt for more details                             //
//                                                            ///
/////////////////////////////////////////////////////////////////
class getid3_lib
{
    public static function PrintHexBytes($string, $hex = \true, $spaces = \true, $htmlencoding = 'UTF-8')
    {
    }
    public static function trunc($floatnumber)
    {
    }
    public static function safe_inc(&$variable, $increment = 1)
    {
    }
    public static function CastAsInt($floatnum)
    {
    }
    public static function intValueSupported($num)
    {
    }
    public static function DecimalizeFraction($fraction)
    {
    }
    public static function DecimalBinary2Float($binarynumerator)
    {
    }
    public static function NormalizeBinaryPoint($binarypointnumber, $maxbits = 52)
    {
    }
    public static function Float2BinaryDecimal($floatvalue)
    {
    }
    public static function Float2String($floatvalue, $bits)
    {
    }
    public static function LittleEndian2Float($byteword)
    {
    }
    public static function BigEndian2Float($byteword)
    {
    }
    public static function BigEndian2Int($byteword, $synchsafe = \false, $signed = \false)
    {
    }
    public static function LittleEndian2Int($byteword, $signed = \false)
    {
    }
    public static function LittleEndian2Bin($byteword)
    {
    }
    public static function BigEndian2Bin($byteword)
    {
    }
    public static function BigEndian2String($number, $minbytes = 1, $synchsafe = \false, $signed = \false)
    {
    }
    public static function Dec2Bin($number)
    {
    }
    public static function Bin2Dec($binstring, $signed = \false)
    {
    }
    public static function Bin2String($binstring)
    {
    }
    public static function LittleEndian2String($number, $minbytes = 1, $synchsafe = \false)
    {
    }
    public static function array_merge_clobber($array1, $array2)
    {
    }
    public static function array_merge_noclobber($array1, $array2)
    {
    }
    public static function flipped_array_merge_noclobber($array1, $array2)
    {
    }
    public static function ksort_recursive(&$theArray)
    {
    }
    public static function fileextension($filename, $numextensions = 1)
    {
    }
    public static function PlaytimeString($seconds)
    {
    }
    public static function DateMac2Unix($macdate)
    {
    }
    public static function FixedPoint8_8($rawdata)
    {
    }
    public static function FixedPoint16_16($rawdata)
    {
    }
    public static function FixedPoint2_30($rawdata)
    {
    }
    public static function CreateDeepArray($ArrayPath, $Separator, $Value)
    {
    }
    public static function array_max($arraydata, $returnkey = \false)
    {
    }
    public static function array_min($arraydata, $returnkey = \false)
    {
    }
    public static function XML2array($XMLstring)
    {
    }
    public static function SimpleXMLelement2array($XMLobject)
    {
    }
    // Allan Hansen <ahØartemis*dk>
    // self::md5_data() - returns md5sum for a file from startuing position to absolute end position
    public static function hash_data($file, $offset, $end, $algorithm)
    {
    }
    public static function CopyFileParts($filename_source, $filename_dest, $offset, $length)
    {
    }
    public static function iconv_fallback_int_utf8($charval)
    {
    }
    // ISO-8859-1 => UTF-8
    public static function iconv_fallback_iso88591_utf8($string, $bom = \false)
    {
    }
    // ISO-8859-1 => UTF-16BE
    public static function iconv_fallback_iso88591_utf16be($string, $bom = \false)
    {
    }
    // ISO-8859-1 => UTF-16LE
    public static function iconv_fallback_iso88591_utf16le($string, $bom = \false)
    {
    }
    // ISO-8859-1 => UTF-16LE (BOM)
    public static function iconv_fallback_iso88591_utf16($string)
    {
    }
    // UTF-8 => ISO-8859-1
    public static function iconv_fallback_utf8_iso88591($string)
    {
    }
    // UTF-8 => UTF-16BE
    public static function iconv_fallback_utf8_utf16be($string, $bom = \false)
    {
    }
    // UTF-8 => UTF-16LE
    public static function iconv_fallback_utf8_utf16le($string, $bom = \false)
    {
    }
    // UTF-8 => UTF-16LE (BOM)
    public static function iconv_fallback_utf8_utf16($string)
    {
    }
    // UTF-16BE => UTF-8
    public static function iconv_fallback_utf16be_utf8($string)
    {
    }
    // UTF-16LE => UTF-8
    public static function iconv_fallback_utf16le_utf8($string)
    {
    }
    // UTF-16BE => ISO-8859-1
    public static function iconv_fallback_utf16be_iso88591($string)
    {
    }
    // UTF-16LE => ISO-8859-1
    public static function iconv_fallback_utf16le_iso88591($string)
    {
    }
    // UTF-16 (BOM) => ISO-8859-1
    public static function iconv_fallback_utf16_iso88591($string)
    {
    }
    // UTF-16 (BOM) => UTF-8
    public static function iconv_fallback_utf16_utf8($string)
    {
    }
    public static function iconv_fallback($in_charset, $out_charset, $string)
    {
    }
    public static function recursiveMultiByteCharString2HTML($data, $charset = 'ISO-8859-1')
    {
    }
    public static function MultiByteCharString2HTML($string, $charset = 'ISO-8859-1')
    {
    }
    public static function RGADnameLookup($namecode)
    {
    }
    public static function RGADoriginatorLookup($originatorcode)
    {
    }
    public static function RGADadjustmentLookup($rawadjustment, $signbit)
    {
    }
    public static function RGADgainString($namecode, $originatorcode, $replaygain)
    {
    }
    public static function RGADamplitude2dB($amplitude)
    {
    }
    public static function GetDataImageSize($imgData, &$imageinfo = array())
    {
    }
    public static function ImageExtFromMime($mime_type)
    {
    }
    public static function ImageTypesLookup($imagetypeid)
    {
    }
    public static function CopyTagsToComments(&$ThisFileInfo)
    {
    }
    public static function EmbeddedLookup($key, $begin, $end, $file, $name)
    {
    }
    public static function IncludeDependency($filename, $sourcefile, $DieOnFailure = \false)
    {
    }
    public static function trimNullByte($string)
    {
    }
    public static function getFileSizeSyscall($path)
    {
    }
    /**
     * Workaround for Bug #37268 (https://bugs.php.net/bug.php?id=37268)
     * @param string $path A path.
     * @param string $suffix If the name component ends in suffix this will also be cut off.
     * @return string
     */
    public static function mb_basename($path, $suffix = \null)
    {
    }
}