<?php


/**
 * WordPress Imagick Image Editor
 *
 * @package WordPress
 * @subpackage Image_Editor
 */
/**
 * WordPress Image Editor Class for Image Manipulation through Imagick PHP Module
 *
 * @since 3.5.0
 * @package WordPress
 * @subpackage Image_Editor
 * @uses WP_Image_Editor Extends class
 */
class WP_Image_Editor_Imagick extends \WP_Image_Editor
{
    /**
     * Imagick object.
     *
     * @access protected
     * @var Imagick
     */
    protected $image;
    public function __destruct()
    {
    }
    /**
     * Checks to see if current environment supports Imagick.
     *
     * We require Imagick 2.2.0 or greater, based on whether the queryFormats()
     * method can be called statically.
     *
     * @since 3.5.0
     *
     * @static
     * @access public
     *
     * @param array $args
     * @return bool
     */
    public static function test($args = array())
    {
    }
    /**
     * Checks to see if editor supports the mime-type specified.
     *
     * @since 3.5.0
     *
     * @static
     * @access public
     *
     * @param string $mime_type
     * @return bool
     */
    public static function supports_mime_type($mime_type)
    {
    }
    /**
     * Loads image from $this->file into new Imagick Object.
     *
     * @since 3.5.0
     * @access protected
     *
     * @return true|WP_Error True if loaded; WP_Error on failure.
     */
    public function load()
    {
    }
    /**
     * Sets Image Compression quality on a 1-100% scale.
     *
     * @since 3.5.0
     * @access public
     *
     * @param int $quality Compression Quality. Range: [1,100]
     * @return true|WP_Error True if set successfully; WP_Error on failure.
     */
    public function set_quality($quality = \null)
    {
    }
    /**
     * Sets or updates current image size.
     *
     * @since 3.5.0
     * @access protected
     *
     * @param int $width
     * @param int $height
     *
     * @return true|WP_Error
     */
    protected function update_size($width = \null, $height = \null)
    {
    }
    /**
     * Resizes current image.
     *
     * At minimum, either a height or width must be provided.
     * If one of the two is set to null, the resize will
     * maintain aspect ratio according to the provided dimension.
     *
     * @since 3.5.0
     * @access public
     *
     * @param  int|null $max_w Image width.
     * @param  int|null $max_h Image height.
     * @param  bool     $crop
     * @return bool|WP_Error
     */
    public function resize($max_w, $max_h, $crop = \false)
    {
    }
    /**
     * Efficiently resize the current image
     *
     * This is a WordPress specific implementation of Imagick::thumbnailImage(),
     * which resizes an image to given dimensions and removes any associated profiles.
     *
     * @since 4.5.0
     * @access protected
     *
     * @param int    $dst_w       The destination width.
     * @param int    $dst_h       The destination height.
     * @param string $filter_name Optional. The Imagick filter to use when resizing. Default 'FILTER_TRIANGLE'.
     * @param bool   $strip_meta  Optional. Strip all profiles, excluding color profiles, from the image. Default true.
     * @return bool|WP_Error
     */
    protected function thumbnail_image($dst_w, $dst_h, $filter_name = 'FILTER_TRIANGLE', $strip_meta = \true)
    {
    }
    /**
     * Resize multiple images from a single source.
     *
     * @since 3.5.0
     * @access public
     *
     * @param array $sizes {
     *     An array of image size arrays. Default sizes are 'small', 'medium', 'medium_large', 'large'.
     *
     *     Either a height or width must be provided.
     *     If one of the two is set to null, the resize will
     *     maintain aspect ratio according to the provided dimension.
     *
     *     @type array $size {
     *         Array of height, width values, and whether to crop.
     *
     *         @type int  $width  Image width. Optional if `$height` is specified.
     *         @type int  $height Image height. Optional if `$width` is specified.
     *         @type bool $crop   Optional. Whether to crop the image. Default false.
     *     }
     * }
     * @return array An array of resized images' metadata by size.
     * @phpstan-param array{
     *   size?: array,
     * } $sizes
     */
    public function multi_resize($sizes)
    {
    }
    /**
     * Crops Image.
     *
     * @since 3.5.0
     * @access public
     *
     * @param int  $src_x The start x position to crop from.
     * @param int  $src_y The start y position to crop from.
     * @param int  $src_w The width to crop.
     * @param int  $src_h The height to crop.
     * @param int  $dst_w Optional. The destination width.
     * @param int  $dst_h Optional. The destination height.
     * @param bool $src_abs Optional. If the source crop points are absolute.
     * @return bool|WP_Error
     */
    public function crop($src_x, $src_y, $src_w, $src_h, $dst_w = \null, $dst_h = \null, $src_abs = \false)
    {
    }
    /**
     * Rotates current image counter-clockwise by $angle.
     *
     * @since 3.5.0
     * @access public
     *
     * @param float $angle
     * @return true|WP_Error
     */
    public function rotate($angle)
    {
    }
    /**
     * Flips current image.
     *
     * @since 3.5.0
     * @access public
     *
     * @param bool $horz Flip along Horizontal Axis
     * @param bool $vert Flip along Vertical Axis
     * @return true|WP_Error
     */
    public function flip($horz, $vert)
    {
    }
    /**
     * Saves current image to file.
     *
     * @since 3.5.0
     * @access public
     *
     * @param string $destfilename
     * @param string $mime_type
     * @return array|WP_Error {'path'=>string, 'file'=>string, 'width'=>int, 'height'=>int, 'mime-type'=>string}
     */
    public function save($destfilename = \null, $mime_type = \null)
    {
    }
    /**
     *
     * @param Imagick $image
     * @param string $filename
     * @param string $mime_type
     * @return array|WP_Error
     */
    protected function _save($image, $filename = \null, $mime_type = \null)
    {
    }
    /**
     * Streams current image to browser.
     *
     * @since 3.5.0
     * @access public
     *
     * @param string $mime_type
     * @return true|WP_Error
     */
    public function stream($mime_type = \null)
    {
    }
    /**
     * Strips all image meta except color profiles from an image.
     *
     * @since 4.5.0
     * @access protected
     *
     * @return true|WP_Error True if stripping metadata was successful. WP_Error object on error.
     */
    protected function strip_meta()
    {
    }
    /**
     * Sets up Imagick for PDF processing.
     * Increases rendering DPI and only loads first page.
     *
     * @since 4.7.0
     * @access protected
     *
     * @return string|WP_Error File to load or WP_Error on failure.
     */
    protected function pdf_setup()
    {
    }
}