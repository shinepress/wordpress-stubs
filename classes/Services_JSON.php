<?php


/**
 * Converts to and from JSON format.
 *
 * Brief example of use:
 *
 * <code>
 * // create a new instance of Services_JSON
 * $json = new Services_JSON();
 *
 * // convert a complexe value to JSON notation, and send it to the browser
 * $value = array('foo', 'bar', array(1, 2, 'baz'), array(3, array(4)));
 * $output = $json->encode($value);
 *
 * print($output);
 * // prints: ["foo","bar",[1,2,"baz"],[3,[4]]]
 *
 * // accept incoming POST data, assumed to be in JSON notation
 * $input = file_get_contents('php://input', 1000000);
 * $value = $json->decode($input);
 * </code>
 */
class Services_JSON
{
    /**
     * constructs a new JSON instance
     *
     * @param    int     $use    object behavior flags; combine with boolean-OR
     *
     *                           possible values:
     *                           - SERVICES_JSON_LOOSE_TYPE:  loose typing.
     *                                   "{...}" syntax creates associative arrays
     *                                   instead of objects in decode().
     *                           - SERVICES_JSON_SUPPRESS_ERRORS:  error suppression.
     *                                   Values which can't be encoded (e.g. resources)
     *                                   appear as NULL instead of throwing errors.
     *                                   By default, a deeply-nested resource will
     *                                   bubble up with an error, so all return values
     *                                   from encode() should be checked with isError()
     *                           - SERVICES_JSON_USE_TO_JSON:  call toJSON when serializing objects
     *                                   It serializes the return value from the toJSON call rather
     *                                   than the object itself, toJSON can return associative arrays,
     *                                   strings or numbers, if you return an object, make sure it does
     *                                   not have a toJSON method, otherwise an error will occur.
     */
    function __construct($use = 0)
    {
    }
    /**
     * PHP4 constructor.
     */
    public function Services_JSON($use = 0)
    {
    }
    // private - cache the mbstring lookup results..
    var $_mb_strlen = \false;
    var $_mb_substr = \false;
    var $_mb_convert_encoding = \false;
    /**
     * convert a string from one UTF-16 char to one UTF-8 char
     *
     * Normally should be handled by mb_convert_encoding, but
     * provides a slower PHP-only method for installations
     * that lack the multibye string extension.
     *
     * @param    string  $utf16  UTF-16 character
     * @return   string  UTF-8 character
     * @access   private
     */
    function utf162utf8($utf16)
    {
    }
    /**
     * convert a string from one UTF-8 char to one UTF-16 char
     *
     * Normally should be handled by mb_convert_encoding, but
     * provides a slower PHP-only method for installations
     * that lack the multibye string extension.
     *
     * @param    string  $utf8   UTF-8 character
     * @return   string  UTF-16 character
     * @access   private
     */
    function utf82utf16($utf8)
    {
    }
    /**
     * encodes an arbitrary variable into JSON format (and sends JSON Header)
     *
     * @param    mixed   $var    any number, boolean, string, array, or object to be encoded.
     *                           see argument 1 to Services_JSON() above for array-parsing behavior.
     *                           if var is a string, note that encode() always expects it
     *                           to be in ASCII or UTF-8 format!
     *
     * @return   mixed   JSON string representation of input var or an error if a problem occurs
     * @access   public
     */
    function encode($var)
    {
    }
    /**
     * encodes an arbitrary variable into JSON format without JSON Header - warning - may allow XSS!!!!)
     *
     * @param    mixed   $var    any number, boolean, string, array, or object to be encoded.
     *                           see argument 1 to Services_JSON() above for array-parsing behavior.
     *                           if var is a string, note that encode() always expects it
     *                           to be in ASCII or UTF-8 format!
     *
     * @return   mixed   JSON string representation of input var or an error if a problem occurs
     * @access   public
     */
    function encodeUnsafe($var)
    {
    }
    /**
     * PRIVATE CODE that does the work of encodes an arbitrary variable into JSON format
     *
     * @param    mixed   $var    any number, boolean, string, array, or object to be encoded.
     *                           see argument 1 to Services_JSON() above for array-parsing behavior.
     *                           if var is a string, note that encode() always expects it
     *                           to be in ASCII or UTF-8 format!
     *
     * @return   mixed   JSON string representation of input var or an error if a problem occurs
     * @access   public
     */
    function _encode($var)
    {
    }
    /**
     * array-walking function for use in generating JSON-formatted name-value pairs
     *
     * @param    string  $name   name of key to use
     * @param    mixed   $value  reference to an array element to be encoded
     *
     * @return   string  JSON-formatted name-value pair, like '"name":value'
     * @access   private
     */
    function name_value($name, $value)
    {
    }
    /**
     * reduce a string by removing leading and trailing comments and whitespace
     *
     * @param    $str    string      string value to strip of comments and whitespace
     *
     * @return   string  string value stripped of comments and whitespace
     * @access   private
     */
    function reduce_string($str)
    {
    }
    /**
     * decodes a JSON string into appropriate variable
     *
     * @param    string  $str    JSON-formatted string
     *
     * @return   mixed   number, boolean, string, array, or object
     *                   corresponding to given JSON input string.
     *                   See argument 1 to Services_JSON() above for object-output behavior.
     *                   Note that decode() always returns strings
     *                   in ASCII or UTF-8 format!
     * @access   public
     */
    function decode($str)
    {
    }
    /**
     * @todo Ultimately, this should just call PEAR::isError()
     */
    function isError($data, $code = \null)
    {
    }
    /**
     * Calculates length of string in bytes
     * @param string
     * @return integer length
     */
    function strlen8($str)
    {
    }
    /**
     * Returns part of a string, interpreting $start and $length as number of bytes.
     * @param string
     * @param integer start
     * @param integer length
     * @return integer length
     */
    function substr8($string, $start, $length = \false)
    {
    }
}