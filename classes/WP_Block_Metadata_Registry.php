<?php


/**
 * Class used for managing block metadata collections.
 *
 * The WP_Block_Metadata_Registry allows plugins to register metadata for large
 * collections of blocks (e.g., 50-100+) using a single PHP file. This approach
 * reduces the need to read and decode multiple `block.json` files, enhancing
 * performance through opcode caching.
 *
 * @since 6.7.0
 */
class WP_Block_Metadata_Registry
{
    /**
     * Registers a block metadata collection.
     *
     * This method allows registering a collection of block metadata from a single
     * manifest file, improving performance for large sets of blocks.
     *
     * The manifest file should be a PHP file that returns an associative array, where
     * the keys are the block identifiers (without their namespace) and the values are
     * the corresponding block metadata arrays. The block identifiers must match the
     * parent directory name for the respective `block.json` file.
     *
     * Example manifest file structure:
     * ```
     * return array(
     *     'example-block' => array(
     *         'title' => 'Example Block',
     *         'category' => 'widgets',
     *         'icon' => 'smiley',
     *         // ... other block metadata
     *     ),
     *     'another-block' => array(
     *         'title' => 'Another Block',
     *         'category' => 'formatting',
     *         'icon' => 'star-filled',
     *         // ... other block metadata
     *     ),
     *     // ... more block metadata entries
     * );
     * ```
     *
     * @since 6.7.0
     *
     * @param string $path     The absolute base path for the collection ( e.g., WP_PLUGIN_DIR . '/my-plugin/blocks/' ).
     * @param string $manifest The absolute path to the manifest file containing the metadata collection.
     * @return bool True if the collection was registered successfully, false otherwise.
     */
    public static function register_collection($path, $manifest)
    {
    }
    /**
     * Retrieves block metadata for a given block within a specific collection.
     *
     * This method uses the registered collections to efficiently lookup
     * block metadata without reading individual `block.json` files.
     *
     * @since 6.7.0
     *
     * @param string $file_or_folder The path to the file or folder containing the block.
     * @return array|null The block metadata for the block, or null if not found.
     */
    public static function get_metadata($file_or_folder)
    {
    }
    /**
     * Checks if metadata exists for a given block name in a specific collection.
     *
     * @since 6.7.0
     *
     * @param string $file_or_folder The path to the file or folder containing the block metadata.
     * @return bool True if metadata exists for the block, false otherwise.
     */
    public static function has_metadata($file_or_folder)
    {
    }
}