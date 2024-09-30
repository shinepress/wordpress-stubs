<?php


/**
 * Handles creating objects and calling methods
 *
 * Access this via {@see SimplePie::get_registry()}
 *
 * @package SimplePie
 */
class SimplePie_Registry
{
    /**
     * Default class mapping
     *
     * Overriding classes *must* subclass these.
     *
     * @var array
     */
    protected $default = array('Cache' => 'SimplePie_Cache', 'Locator' => 'SimplePie_Locator', 'Parser' => 'SimplePie_Parser', 'File' => 'SimplePie_File', 'Sanitize' => 'SimplePie_Sanitize', 'Item' => 'SimplePie_Item', 'Author' => 'SimplePie_Author', 'Category' => 'SimplePie_Category', 'Enclosure' => 'SimplePie_Enclosure', 'Caption' => 'SimplePie_Caption', 'Copyright' => 'SimplePie_Copyright', 'Credit' => 'SimplePie_Credit', 'Rating' => 'SimplePie_Rating', 'Restriction' => 'SimplePie_Restriction', 'Content_Type_Sniffer' => 'SimplePie_Content_Type_Sniffer', 'Source' => 'SimplePie_Source', 'Misc' => 'SimplePie_Misc', 'XML_Declaration_Parser' => 'SimplePie_XML_Declaration_Parser', 'Parse_Date' => 'SimplePie_Parse_Date');
    /**
     * Class mapping
     *
     * @see register()
     * @var array
     */
    protected $classes = array();
    /**
     * Legacy classes
     *
     * @see register()
     * @var array
     */
    protected $legacy = array();
    /**
     * Constructor
     *
     * No-op
     */
    public function __construct()
    {
    }
    /**
     * Register a class
     *
     * @param string $type See {@see $default} for names
     * @param string $class Class name, must subclass the corresponding default
     * @param bool $legacy Whether to enable legacy support for this class
     * @return bool Successfulness
     */
    public function register($type, $class, $legacy = \false)
    {
    }
    /**
     * Get the class registered for a type
     *
     * Where possible, use {@see create()} or {@see call()} instead
     *
     * @param string $type
     * @return string|null
     */
    public function get_class($type)
    {
    }
    /**
     * Create a new instance of a given type
     *
     * @param string $type
     * @param array $parameters Parameters to pass to the constructor
     * @return object Instance of class
     */
    public function &create($type, $parameters = array())
    {
    }
    /**
     * Call a static method for a type
     *
     * @param string $type
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function &call($type, $method, $parameters = array())
    {
    }
}