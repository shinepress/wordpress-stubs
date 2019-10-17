<?php


/**
 * Retrieve path of page template in current or parent template.
 *
 * The hierarchy for this template looks like:
 *
 * 1. {Page Template}.php
 * 2. page-{page_name}.php
 * 3. page-{id}.php
 * 4. page.php
 *
 * An example of this is:
 *
 * 1. page-templates/full-width.php
 * 2. page-about.php
 * 3. page-4.php
 * 4. page.php
 *
 * The template hierarchy is filterable via the {@see 'page_template_hierarchy'} hook.
 * The template path is filterable via the {@see 'page_template'} hook.
 *
 * @since 1.5.0
 * @since 4.7.0 The decoded form of `page-{page_name}.php` was added to the top of the
 *              template hierarchy when the page name contains multibyte characters.
 *
 * @see get_query_template()
 *
 * @return string Full path to page template file.
 */
function get_page_template()
{
}