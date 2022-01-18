<?php


/**
 * Base WordPress Image Editor
 *
 * @package WordPress
 * @subpackage Image_Editor
 */
/**
 * Base image editor class from which implementations extend
 *
 * @since 3.5.0
 */
abstract class WP_Image_Editor
{
    protected $file = \null;
    protected $size = \null;
    protected $mime_type = \null;
    protected $default_mime_type = 'image/jpeg';
    protected $quality = \false;
    protected $default_quality = 82;
    /**
     * Each instance handles a single file.
     *
     * @param string $file Path to the file to load.
     */
    public function __construct($file)
    {
    }
    /**
     * Checks to see if current environment supports the editor chosen.
     * Must be overridden in a sub-class.
     *
     * @since 3.5.0
     *
     * @static
     * @abstract
     *
     * @param array $args
     * @return bool
     */
    public static function test($args = array())
    {
    }
    /**
     * Checks to see if editor supports the mime-type specified.
     * Must be overridden in a sub-class.
     *
     * @since 3.5.0
     *
     * @static
     * @abstract
     *
     * @param string $mime_type
     * @return bool
     */
    public static function supports_mime_type($mime_type)
    {
    }
    /**
     * Loads image from $this->file into editor.
     *
     * @since 3.5.0
     * @abstract
     *
     * @return bool|WP_Error True if loaded; WP_Error on failure.
     */
    abstract public function load();
    /**
     * Saves current image to file.
     *
     * @since 3.5.0
     * @abstract
     *
     * @param string $destfilename
     * @param string $mime_type
     * @return array|WP_Error {'path'=>string, 'file'=>string, 'width'=>int, 'height'=>int, 'mime-type'=>string}
     */
    abstract public function save($destfilename = \null, $mime_type = \null);
    /**
     * Resizes current image.
     *
     * At minimum, either a height or width must be provided.
     * If one of the two is set to null, the resize will
     * maintain aspect ratio according to the provided dimension.
     *
     * @since 3.5.0
     * @abstract
     *
     * @param  int|null $max_w Image width.
     * @param  int|null $max_h Image height.
     * @param  bool     $crop
     * @return bool|WP_Error
     */
    abstract public function resize($max_w, $max_h, $crop = \false);
    /**
     * Resize multiple images from a single source.
     *
     * @since 3.5.0
     * @abstract
     *
     * @param array $sizes {
     *     An array of image size arrays. Default sizes are 'small', 'medium', 'large'.
     *
     *     @type array $size {
     *         @type int  $width  Image width.
     *         @type int  $height Image height.
     *         @type bool $crop   Optional. Whether to crop the image. Default false.
     *     }
     * }
     * @return array An array of resized images metadata by size.
     */
    abstract public function multi_resize($sizes);
    /**
     * Crops Image.
     *
     * @since 3.5.0
     * @abstract
     *
     * @param int $src_x The start x position to crop from.
     * @param int $src_y The start y position to crop from.
     * @param int $src_w The width to crop.
     * @param int $src_h The height to crop.
     * @param int $dst_w Optional. The destination width.
     * @param int $dst_h Optional. The destination height.
     * @param bool $src_abs Optional. If the source crop points are absolute.
     * @return bool|WP_Error
     */
    abstract public function crop($src_x, $src_y, $src_w, $src_h, $dst_w = \null, $dst_h = \null, $src_abs = \false);
    /**
     * Rotates current image counter-clockwise by $angle.
     *
     * @since 3.5.0
     * @abstract
     *
     * @param float $angle
     * @return bool|WP_Error
     */
    abstract public function rotate($angle);
    /**
     * Flips current image.
     *
     * @since 3.5.0
     * @abstract
     *
     * @param bool $horz Flip along Horizontal Axis
     * @param bool $vert Flip along Vertical Axis
     * @return bool|WP_Error
     */
    abstract public function flip($horz, $vert);
    /**
     * Streams current image to browser.
     *
     * @since 3.5.0
     * @abstract
     *
     * @param string $mime_type The mime type of the image.
     * @return bool|WP_Error True on success, WP_Error object or false on failure.
     */
    abstract public function stream($mime_type = \null);
    /**
     * Gets dimensions of image.
     *
     * @since 3.5.0
     *
     * @return array {'width'=>int, 'height'=>int}
     */
    public function get_size()
    {
    }
    /**
     * Sets current image size.
     *
     * @since 3.5.0
     *
     * @param int $width
     * @param int $height
     * @return true
     */
    protected function update_size($width = \null, $height = \null)
    {
    }
    /**
     * Gets the Image Compression quality on a 1-100% scale.
     *
     * @since 4.0.0
     *
     * @return int $quality Compression Quality. Range: [1,100]
     */
    public function get_quality()
    {
    }
    /**
     * Sets Image Compression quality on a 1-100% scale.
     *
     * @since 3.5.0
     *
     * @param int $quality Compression Quality. Range: [1,100]
     * @return true|WP_Error True if set successfully; WP_Error on failure.
     */
    public function set_quality($quality = \null)
    {
    }
    /**
     * Returns preferred mime-type and extension based on provided
     * file's extension and mime, or current file's extension and mime.
     *
     * Will default to $this->default_mime_type if requested is not supported.
     *
     * Provides corrected filename only if filename is provided.
     *
     * @since 3.5.0
     *
     * @param string $filename
     * @param string $mime_type
     * @return array { filename|null, extension, mime-type }
     */
    protected function get_output_format($filename = \null, $mime_type = \null)
    {
    }
    /**
     * Builds an output filename based on current file, and adding proper suffix
     *
     * @since 3.5.0
     *
     * @param string $suffix
     * @param string $dest_path
     * @param string $extension
     * @return string filename
     */
    public function generate_filename($suffix = \null, $dest_path = \null, $extension = \null)
    {
    }
    /**
     * Builds and returns proper suffix for file based on height and width.
     *
     * @since 3.5.0
     *
     * @return false|string suffix
     */
    public function get_suffix()
    {
    }
    /**
     * Either calls editor's save function or handles file as a stream.
     *
     * @since 3.5.0
     *
     * @param string|stream $filename
     * @param callable $function
     * @param array $arguments
     * @return bool
     */
    protected function make_image($filename, $function, $arguments)
    {
    }
    /**
     * Returns first matched mime-type from extension,
     * as mapped from wp_get_mime_types()
     *
     * @since 3.5.0
     *
     * @static
     *
     * @param string $extension
     * @return string|false
     */
    protected static function get_mime_type($extension = \null)
    {
    }
    /**
     * Returns first matched extension from Mime-type,
     * as mapped from wp_get_mime_types()
     *
     * @since 3.5.0
     *
     * @static
     *
     * @param string $mime_type
     * @return string|false
     */
    protected static function get_extension($mime_type = \null)
    {
    }
}