<?php


/**
 * I18N: WP_Translation_File_MO class.
 *
 * @package WordPress
 * @subpackage I18N
 * @since 6.5.0
 */
/**
 * Class WP_Translation_File_MO.
 *
 * @since 6.5.0
 */
class WP_Translation_File_MO extends \WP_Translation_File
{
    /**
     * Endian value.
     *
     * V for little endian, N for big endian, or false.
     *
     * Used for unpack().
     *
     * @since 6.5.0
     * @var false|'V'|'N'
     */
    protected $uint32 = \false;
    /**
     * The magic number of the GNU message catalog format.
     *
     * @since 6.5.0
     * @var int
     */
    const MAGIC_MARKER = 0x950412de;
    /**
     * Detects endian and validates file.
     *
     * @since 6.5.0
     *
     * @param string $header File contents.
     * @return false|'V'|'N' V for little endian, N for big endian, or false on failure.
     */
    protected function detect_endian_and_validate_file(string $header)
    {
    }
    /**
     * Parses the file.
     *
     * @since 6.5.0
     *
     * @return bool True on success, false otherwise.
     */
    protected function parse_file(): bool
    {
    }
    /**
     * Exports translation contents as a string.
     *
     * @since 6.5.0
     *
     * @return string Translation file contents.
     */
    public function export(): string
    {
    }
}