<?php


/**
 * WordPress GD Image Editor
 *
 * @package WordPress
 * @subpackage Image_Editor
 */
/**
 * WordPress Image Editor Class for Image Manipulation through GD
 *
 * @since 3.5.0
 * @package WordPress
 * @subpackage Image_Editor
 * @uses WP_Image_Editor Extends class
 */
class WP_Image_Editor_GD extends \WP_Image_Editor
{
    /**
     * GD Resource.
     *
     * @access protected
     * @var resource
     */
    protected $image;
    public function __destruct()
    {
    }
    /**
     * Checks to see if current environment supports GD.
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
     * Loads image from $this->file into new GD Resource.
     *
     * @since 3.5.0
     * @access protected
     *
     * @return bool|WP_Error True if loaded successfully; WP_Error on failure.
     */
    public function load()
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
     * @return true
     */
    protected function update_size($width = \false, $height = \false)
    {
    }
    /**
     * Resizes current image.
     * Wraps _resize, since _resize returns a GD Resource.
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
     * @return true|WP_Error
     */
    public function resize($max_w, $max_h, $crop = \false)
    {
    }
    /**
     *
     * @param int $max_w
     * @param int $max_h
     * @param bool|array $crop
     * @return resource|WP_Error
     */
    protected function _resize($max_w, $max_h, $crop = \false)
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
     * @param int  $src_x   The start x position to crop from.
     * @param int  $src_y   The start y position to crop from.
     * @param int  $src_w   The width to crop.
     * @param int  $src_h   The height to crop.
     * @param int  $dst_w   Optional. The destination width.
     * @param int  $dst_h   Optional. The destination height.
     * @param bool $src_abs Optional. If the source crop points are absolute.
     * @return bool|WP_Error
     */
    public function crop($src_x, $src_y, $src_w, $src_h, $dst_w = \null, $dst_h = \null, $src_abs = \false)
    {
    }
    /**
     * Rotates current image counter-clockwise by $angle.
     * Ported from image-edit.php
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
     * Saves current in-memory image to file.
     *
     * @since 3.5.0
     * @access public
     *
     * @param string|null $filename
     * @param string|null $mime_type
     * @return array|WP_Error {'path'=>string, 'file'=>string, 'width'=>int, 'height'=>int, 'mime-type'=>string}
     */
    public function save($filename = \null, $mime_type = \null)
    {
    }
    /**
     * @param resource $image
     * @param string|null $filename
     * @param string|null $mime_type
     * @return WP_Error|array
     */
    protected function _save($image, $filename = \null, $mime_type = \null)
    {
    }
    /**
     * Returns stream of current image.
     *
     * @since 3.5.0
     * @access public
     *
     * @param string $mime_type
     * @return bool
     */
    public function stream($mime_type = \null)
    {
    }
    /**
     * Either calls editor's save function or handles file as a stream.
     *
     * @since 3.5.0
     * @access protected
     *
     * @param string|stream $filename
     * @param callable $function
     * @param array $arguments
     * @return bool
     */
    protected function make_image($filename, $function, $arguments)
    {
    }
}