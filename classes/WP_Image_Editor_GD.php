<?php


/**
 * WordPress Image Editor Class for Image Manipulation through GD
 *
 * @since 3.5.0
 *
 * @see WP_Image_Editor
 */
class WP_Image_Editor_GD extends \WP_Image_Editor
{
    /**
     * GD Resource.
     *
     * @var resource|GdImage
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
     *
     * @return true|WP_Error True if loaded successfully; WP_Error on failure.
     */
    public function load()
    {
    }
    /**
     * Sets or updates current image size.
     *
     * @since 3.5.0
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
     *
     * Wraps `::_resize()` which returns a GD resource or GdImage instance.
     *
     * At minimum, either a height or width must be provided. If one of the two is set
     * to null, the resize will maintain aspect ratio according to the provided dimension.
     *
     * @since 3.5.0
     *
     * @param int|null   $max_w Image width.
     * @param int|null   $max_h Image height.
     * @param bool|array $crop  {
     *     Optional. Image cropping behavior. If false, the image will be scaled (default).
     *     If true, image will be cropped to the specified dimensions using center positions.
     *     If an array, the image will be cropped using the array to specify the crop location:
     *
     *     @type string $0 The x crop position. Accepts 'left' 'center', or 'right'.
     *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'.
     * }
     * @return true|WP_Error
     * @phpstan-param bool|array{
     *   0: string,
     *   1: string,
     * } $crop
     */
    public function resize($max_w, $max_h, $crop = \false)
    {
    }
    /**
     * @param int        $max_w
     * @param int        $max_h
     * @param bool|array $crop  {
     *     Optional. Image cropping behavior. If false, the image will be scaled (default).
     *     If true, image will be cropped to the specified dimensions using center positions.
     *     If an array, the image will be cropped using the array to specify the crop location:
     *
     *     @type string $0 The x crop position. Accepts 'left' 'center', or 'right'.
     *     @type string $1 The y crop position. Accepts 'top', 'center', or 'bottom'.
     * }
     * @return resource|GdImage|WP_Error
     * @phpstan-param bool|array{
     *   0: string,
     *   1: string,
     * } $crop
     */
    protected function _resize($max_w, $max_h, $crop = \false)
    {
    }
    /**
     * Create multiple smaller images from a single source.
     *
     * Attempts to create all sub-sizes and returns the meta data at the end. This
     * may result in the server running out of resources. When it fails there may be few
     * "orphaned" images left over as the meta data is never returned and saved.
     *
     * As of 5.3.0 the preferred way to do this is with `make_subsize()`. It creates
     * the new images one at a time and allows for the meta data to be saved after
     * each new image is created.
     *
     * @since 3.5.0
     *
     * @param array $sizes {
     *     An array of image size data arrays.
     *
     *     Either a height or width must be provided.
     *     If one of the two is set to null, the resize will
     *     maintain aspect ratio according to the source image.
     *
     *     @type array ...$0 {
     *         Array of height, width values, and whether to crop.
     *
     *         @type int        $width  Image width. Optional if `$height` is specified.
     *         @type int        $height Image height. Optional if `$width` is specified.
     *         @type bool|array $crop   Optional. Whether to crop the image. Default false.
     *     }
     * }
     * @return array An array of resized images' metadata by size.
     * @phpstan-param array<int|string, array{
     *   width?: int,
     *   height?: int,
     *   crop?: bool|array,
     * }> $sizes
     */
    public function multi_resize($sizes)
    {
    }
    /**
     * Create an image sub-size and return the image meta data value for it.
     *
     * @since 5.3.0
     *
     * @param array $size_data {
     *     Array of size data.
     *
     *     @type int        $width  The maximum width in pixels.
     *     @type int        $height The maximum height in pixels.
     *     @type bool|array $crop   Whether to crop the image to exact dimensions.
     * }
     * @return array|WP_Error The image data array for inclusion in the `sizes` array in the image meta,
     *                        WP_Error object on error.
     * @phpstan-param array{
     *   width?: int,
     *   height?: int,
     *   crop?: bool|array,
     * } $size_data
     */
    public function make_subsize($size_data)
    {
    }
    /**
     * Crops Image.
     *
     * @since 3.5.0
     *
     * @param int  $src_x   The start x position to crop from.
     * @param int  $src_y   The start y position to crop from.
     * @param int  $src_w   The width to crop.
     * @param int  $src_h   The height to crop.
     * @param int  $dst_w   Optional. The destination width.
     * @param int  $dst_h   Optional. The destination height.
     * @param bool $src_abs Optional. If the source crop points are absolute.
     * @return true|WP_Error
     */
    public function crop($src_x, $src_y, $src_w, $src_h, $dst_w = \null, $dst_h = \null, $src_abs = \false)
    {
    }
    /**
     * Rotates current image counter-clockwise by $angle.
     * Ported from image-edit.php
     *
     * @since 3.5.0
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
     *
     * @param bool $horz Flip along Horizontal Axis.
     * @param bool $vert Flip along Vertical Axis.
     * @return true|WP_Error
     */
    public function flip($horz, $vert)
    {
    }
    /**
     * Saves current in-memory image to file.
     *
     * @since 3.5.0
     * @since 5.9.0 Renamed `$filename` to `$destfilename` to match parent class
     *              for PHP 8 named parameter support.
     * @since 6.0.0 The `$filesize` value was added to the returned array.
     *
     * @param string|null $destfilename Optional. Destination filename. Default null.
     * @param string|null $mime_type    Optional. The mime-type. Default null.
     * @return array|WP_Error {
     *     Array on success or WP_Error if the file failed to save.
     *
     *     @type string $path      Path to the image file.
     *     @type string $file      Name of the image file.
     *     @type int    $width     Image width.
     *     @type int    $height    Image height.
     *     @type string $mime-type The mime type of the image.
     *     @type int    $filesize  File size of the image.
     * }
     * @phpstan-return \WP_Error|array{
     *   path: string,
     *   file: string,
     *   width: int,
     *   height: int,
     *   mime-type: string,
     *   filesize: int,
     * }
     */
    public function save($destfilename = \null, $mime_type = \null)
    {
    }
    /**
     * @since 3.5.0
     * @since 6.0.0 The `$filesize` value was added to the returned array.
     *
     * @param resource|GdImage $image
     * @param string|null      $filename
     * @param string|null      $mime_type
     * @return array|WP_Error {
     *     Array on success or WP_Error if the file failed to save.
     *
     *     @type string $path      Path to the image file.
     *     @type string $file      Name of the image file.
     *     @type int    $width     Image width.
     *     @type int    $height    Image height.
     *     @type string $mime-type The mime type of the image.
     *     @type int    $filesize  File size of the image.
     * }
     * @phpstan-return \WP_Error|array{
     *   path: string,
     *   file: string,
     *   width: int,
     *   height: int,
     *   mime-type: string,
     *   filesize: int,
     * }
     */
    protected function _save($image, $filename = \null, $mime_type = \null)
    {
    }
    /**
     * Sets Image Compression quality on a 1-100% scale. Handles WebP lossless images.
     *
     * @since 6.7.0
     *
     * @param int $quality Compression Quality. Range: [1,100]
     * @return true|WP_Error True if set successfully; WP_Error on failure.
     */
    public function set_quality($quality = \null)
    {
    }
    /**
     * Returns stream of current image.
     *
     * @since 3.5.0
     *
     * @param string $mime_type The mime type of the image.
     * @return bool True on success, false on failure.
     */
    public function stream($mime_type = \null)
    {
    }
    /**
     * Either calls editor's save function or handles file as a stream.
     *
     * @since 3.5.0
     *
     * @param string   $filename
     * @param callable $callback
     * @param array    $arguments
     * @return bool
     */
    protected function make_image($filename, $callback, $arguments)
    {
    }
}