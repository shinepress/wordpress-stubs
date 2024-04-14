<?php


/**
 * Add a new user to a blog by visiting /newbloguser/{key}/.
 *
 * This will only work when the user's details are saved as an option
 * keyed as 'new_user_{key}', where '{key}' is a hash generated for the user to be
 * added, as when a user is invited through the regular WP Add User interface.
 *
 * @since MU (3.0.0)
 * @phpstan-return void
 */
function maybe_add_existing_user_to_blog()
{
}