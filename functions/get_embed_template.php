<?php


/**
 * Retrieves an embed template path in the current or parent template.
 *
 * The hierarchy for this template looks like:
 *
 * 1. embed-{post_type}-{post_format}.php
 * 2. embed-{post_type}.php
 * 3. embed.php
 *
 * An example of this is:
 *
 * 1. embed-post-audio.php
 * 2. embed-post.php
 * 3. embed.php
 *
 * The template hierarchy is filterable via the {@see 'embed_template_hierarchy'} hook.
 * The template path is filterable via the {@see 'embed_template'} hook.
 *
 * @since 4.5.0
 *
 * @see get_query_template()
 *
 * @return string Full path to embed template file.
 */
function get_embed_template()
{
}