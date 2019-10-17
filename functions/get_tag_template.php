<?php


/**
 * Retrieve path of tag template in current or parent template.
 *
 * The hierarchy for this template looks like:
 *
 * 1. tag-{slug}.php
 * 2. tag-{id}.php
 * 3. tag.php
 *
 * An example of this is:
 *
 * 1. tag-wordpress.php
 * 2. tag-3.php
 * 3. tag.php
 *
 * The template hierarchy is filterable via the {@see 'tag_template_hierarchy'} hook.
 * The template path is filterable via the {@see 'tag_template'} hook.
 *
 * @since 2.3.0
 * @since 4.7.0 The decoded form of `tag-{slug}.php` was added to the top of the
 *              template hierarchy when the tag slug contains multibyte characters.
 *
 * @see get_query_template()
 *
 * @return string Full path to tag template file.
 */
function get_tag_template()
{
}