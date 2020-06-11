<?php


/**
 * Retrieve path of author template in current or parent template.
 *
 * The hierarchy for this template looks like:
 *
 * 1. author-{nicename}.php
 * 2. author-{id}.php
 * 3. author.php
 *
 * An example of this is:
 *
 * 1. author-john.php
 * 2. author-1.php
 * 3. author.php
 *
 * The template hierarchy is filterable via the {@see 'author_template_hierarchy'} hook.
 * The template path is filterable via the {@see 'author_template'} hook.
 *
 * @since 1.5.0
 *
 * @see get_query_template()
 *
 * @return string Full path to author template file.
 */
function get_author_template()
{
}