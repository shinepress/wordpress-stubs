<?php


/**
 * Retrieves formatted date timestamp of a revision (linked to that revisions's page).
 *
 * @since 3.6.0
 *
 * @param int|WP_Post $revision Revision ID or revision object.
 * @param bool        $link     Optional. Whether to link to revision's page. Default true.
 * @return string|false gravatar, user, i18n formatted datetimestamp or localized 'Current Revision'.
 */
function wp_post_revision_title_expanded($revision, $link = \true)
{
}