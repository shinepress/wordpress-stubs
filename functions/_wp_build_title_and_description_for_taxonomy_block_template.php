<?php


/**
 * Builds the title and description of a taxonomy-specific template based on the underlying entity referenced.
 *
 * Mutates the underlying template object.
 *
 * @since 6.1.0
 * @access private
 *
 * @param string            $taxonomy Identifier of the taxonomy, e.g. category.
 * @param string            $slug     Slug of the term, e.g. shoes.
 * @param WP_Block_Template $template Template to mutate adding the description and title computed.
 * @return bool True if the term referenced was found and false otherwise.
 */
function _wp_build_title_and_description_for_taxonomy_block_template($taxonomy, $slug, \WP_Block_Template $template)
{
}