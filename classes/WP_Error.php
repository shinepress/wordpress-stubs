<?php


/**
 * WordPress Error API.
 *
 * @package WordPress
 */
/**
 * WordPress Error class.
 *
 * Container for checking for WordPress errors and error messages. Return
 * WP_Error and use is_wp_error() to check if this class is returned. Many
 * core WordPress functions pass this class in the event of an error and
 * if not handled properly will result in code errors.
 *
 * @since 2.1.0
 */
class WP_Error
{
    /**
     * Stores the list of errors.
     *
     * @since 2.1.0
     * @var array
     */
    public $errors = array();
    /**
     * Stores the most recently added data for each error code.
     *
     * @since 2.1.0
     * @var array
     */
    public $error_data = array();
    /**
     * Stores previously added data added for error codes, oldest-to-newest by code.
     *
     * @since 5.6.0
     * @var array[]
     */
    protected $additional_data = array();
    /**
     * Initializes the error.
     *
     * If `$code` is empty, the other parameters will be ignored.
     * When `$code` is not empty, `$message` will be used even if
     * it is empty. The `$data` parameter will be used only if it
     * is not empty.
     *
     * Though the class is constructed with a single error code and
     * message, multiple codes can be added using the `add()` method.
     *
     * @since 2.1.0
     *
     * @param string|int $code    Error code.
     * @param string     $message Error message.
     * @param mixed      $data    Optional. Error data.
     * @phpstan-return void
     */
    public function __construct($code = '', $message = '', $data = '')
    {
    }
    /**
     * Retrieves all error codes.
     *
     * @since 2.1.0
     *
     * @return array List of error codes, if available.
     */
    public function get_error_codes()
    {
    }
    /**
     * Retrieves the first error code available.
     *
     * @since 2.1.0
     *
     * @return string|int Empty string, if no error codes.
     */
    public function get_error_code()
    {
    }
    /**
     * Retrieves all error messages, or the error messages for the given error code.
     *
     * @since 2.1.0
     *
     * @param string|int $code Optional. Retrieve messages matching code, if exists.
     * @return string[] Error strings on success, or empty array if there are none.
     */
    public function get_error_messages($code = '')
    {
    }
    /**
     * Gets a single error message.
     *
     * This will get the first message available for the code. If no code is
     * given then the first code available will be used.
     *
     * @since 2.1.0
     *
     * @param string|int $code Optional. Error code to retrieve message.
     * @return string The error message.
     */
    public function get_error_message($code = '')
    {
    }
    /**
     * Retrieves the most recently added error data for an error code.
     *
     * @since 2.1.0
     *
     * @param string|int $code Optional. Error code.
     * @return mixed Error data, if it exists.
     */
    public function get_error_data($code = '')
    {
    }
    /**
     * Verifies if the instance contains errors.
     *
     * @since 5.1.0
     *
     * @return bool If the instance contains errors.
     */
    public function has_errors()
    {
    }
    /**
     * Adds an error or appends an additional message to an existing error.
     *
     * @since 2.1.0
     *
     * @param string|int $code    Error code.
     * @param string     $message Error message.
     * @param mixed      $data    Optional. Error data.
     */
    public function add($code, $message, $data = '')
    {
    }
    /**
     * Adds data to an error with the given code.
     *
     * @since 2.1.0
     * @since 5.6.0 Errors can now contain more than one item of error data. {@see WP_Error::$additional_data}.
     *
     * @param mixed      $data Error data.
     * @param string|int $code Error code.
     */
    public function add_data($data, $code = '')
    {
    }
    /**
     * Retrieves all error data for an error code in the order in which the data was added.
     *
     * @since 5.6.0
     *
     * @param string|int $code Error code.
     * @return mixed[] Array of error data, if it exists.
     */
    public function get_all_error_data($code = '')
    {
    }
    /**
     * Removes the specified error.
     *
     * This function removes all error messages associated with the specified
     * error code, along with any error data for that code.
     *
     * @since 4.1.0
     *
     * @param string|int $code Error code.
     */
    public function remove($code)
    {
    }
    /**
     * Merges the errors in the given error object into this one.
     *
     * @since 5.6.0
     *
     * @param WP_Error $error Error object to merge.
     */
    public function merge_from(\WP_Error $error)
    {
    }
    /**
     * Exports the errors in this object into the given one.
     *
     * @since 5.6.0
     *
     * @param WP_Error $error Error object to export into.
     */
    public function export_to(\WP_Error $error)
    {
    }
    /**
     * Copies errors from one WP_Error instance to another.
     *
     * @since 5.6.0
     *
     * @param WP_Error $from The WP_Error to copy from.
     * @param WP_Error $to   The WP_Error to copy to.
     */
    protected static function copy_errors(\WP_Error $from, \WP_Error $to)
    {
    }
}