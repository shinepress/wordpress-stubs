<?php


/**
 * Inject ignoredHookedBlocks metadata attributes into a template or template part.
 *
 * Given an object that represents a `wp_template` or `wp_template_part` post object
 * prepared for inserting or updating the database, locate all blocks that have
 * hooked blocks, and inject a `metadata.ignoredHookedBlocks` attribute into the anchor
 * blocks to reflect the latter.
 *
 * @since 6.5.0
 * @access private
 *
 * @param stdClass        $post    An object representing a template or template part
 *                                 prepared for inserting or updating the database.
 * @param WP_REST_Request $request Request object.
 * @return stdClass The updated object representing a template or template part.
 */
function inject_ignored_hooked_blocks_metadata_attributes($post, $request)
{
}