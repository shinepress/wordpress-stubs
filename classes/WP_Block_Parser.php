<?php


/**
 * Class WP_Block_Parser
 *
 * Parses a document and constructs a list of parsed block objects
 *
 * @since 3.8.0
 * @since 4.0.0 returns arrays not objects, all attributes are arrays
 */
class WP_Block_Parser
{
    /**
     * Input document being parsed
     *
     * @example "Pre-text\n<!-- wp:paragraph -->This is inside a block!<!-- /wp:paragraph -->"
     *
     * @since 3.8.0
     * @var string
     */
    public $document;
    /**
     * Tracks parsing progress through document
     *
     * @since 3.8.0
     * @var int
     */
    public $offset;
    /**
     * List of parsed blocks
     *
     * @since 3.8.0
     * @var WP_Block_Parser_Block[]
     */
    public $output;
    /**
     * Stack of partially-parsed structures in memory during parse
     *
     * @since 3.8.0
     * @var WP_Block_Parser_Frame[]
     */
    public $stack;
    /**
     * Empty associative array, here due to PHP quirks
     *
     * @since 4.4.0
     * @var array empty associative array
     */
    public $empty_attrs;
    /**
     * Parses a document and returns a list of block structures
     *
     * When encountering an invalid parse will return a best-effort
     * parse. In contrast to the specification parser this does not
     * return an error on invalid inputs.
     *
     * @since 3.8.0
     *
     * @param string $document
     * @return WP_Block_Parser_Block[]
     */
    function parse($document)
    {
    }
    /**
     * Processes the next token from the input document
     * and returns whether to proceed eating more tokens
     *
     * This is the "next step" function that essentially
     * takes a token as its input and decides what to do
     * with that token before descending deeper into a
     * nested block tree or continuing along the document
     * or breaking out of a level of nesting.
     *
     * @internal
     * @since 3.8.0
     * @return bool
     */
    function proceed()
    {
    }
    /**
     * Scans the document from where we last left off
     * and finds the next valid token to parse if it exists
     *
     * Returns the type of the find: kind of find, block information, attributes
     *
     * @internal
     * @since 3.8.0
     * @since 4.6.1 fixed a bug in attribute parsing which caused catastrophic backtracking on invalid block comments
     * @return array
     */
    function next_token()
    {
    }
    /**
     * Returns a new block object for freeform HTML
     *
     * @internal
     * @since 3.9.0
     *
     * @param string $innerHTML HTML content of block
     * @return WP_Block_Parser_Block freeform block object
     */
    function freeform($innerHTML)
    {
    }
    /**
     * Pushes a length of text from the input document
     * to the output list as a freeform block
     *
     * @internal
     * @since 3.8.0
     * @param null $length how many bytes of document text to output
     */
    function add_freeform($length = \null)
    {
    }
    /**
     * Given a block structure from memory pushes
     * a new block to the output list
     *
     * @internal
     * @since 3.8.0
     * @param WP_Block_Parser_Block $block the block to add to the output
     * @param int $token_start byte offset into the document where the first token for the block starts
     * @param int $token_length byte length of entire block from start of opening token to end of closing token
     * @param int|null $last_offset last byte offset into document if continuing form earlier output
     */
    function add_inner_block(\WP_Block_Parser_Block $block, $token_start, $token_length, $last_offset = \null)
    {
    }
    /**
     * Pushes the top block from the parsing stack to the output list
     *
     * @internal
     * @since 3.8.0
     * @param int|null $end_offset byte offset into document for where we should stop sending text output as HTML
     */
    function add_block_from_stack($end_offset = \null)
    {
    }
}