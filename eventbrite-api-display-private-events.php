<?php
/*
Plugin Name: Eventbrite API - Display Private Events
Plugin URI: https://github.com/Automattic/eventbrite-api-display-private-events
Description: Allow the Eventbrite API plugin to display private events.
Version: 1.0
Author: Automattic
Author URI: http://automattic.com
License: GPL v2 or newer <https://www.gnu.org/licenses/gpl.txt>
*/

/**
 * Allow the Eventbrite API plugin to display private events on eventbrite.com.
 */
function eventbrite_display_private_events( $args ) {
	// Enable private events.
	$args['display_private'] = true;

	// Return filtered args.
	return $args;
}
add_filter( 'eventbrite_query_args', 'eventbrite_display_private_events' );
