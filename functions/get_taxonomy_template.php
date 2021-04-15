<?php


/**
 * Retrieve path of custom taxonomy term template in current or parent template.
 *
 * The hierarchy for this template looks like:
 *
 * 1. taxonomy-{taxonomy_slug}-{term_slug}.php
 * 2. taxonomy-{taxonomy_slug}.php
 * 3. taxonomy.php
 *
 * An example of this is:
 *
 * 1. taxonomy-location-texas.php
 * 2. taxonomy-location.php
 * 3. taxonomy.php
 *
 * The template hierarchy is filterable via the {@see 'taxonomy_template_hierarchy'} hook.
 * The template path is filterable via the {@see 'taxonomy_template'} hook.
 *
 * @since 2.5.0
 * @since 4.7.0 The decoded form of `taxonomy-{taxonomy_slug}-{term_slug}.php` was added to the top of the
 *              template hierarchy when the term slug contains multibyte characters.
 *
 * @see get_query_template()
 *
 * @return string Full path to custom taxonomy term template file.
 */
function get_taxonomy_template()
{
}