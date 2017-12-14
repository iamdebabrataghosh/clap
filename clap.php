<?php
/*
Plugin Name:  Clap
Plugin URI:   https://wordpress.org/plugins/
Description:  WordPress plugin to allow end user clap on any content
Version:      0.1
Author:       Debabrata Ghosh
Author URI:   http://debabrataghosh.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  clap, wp-clap
Domain Path:  /languages

Clap plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Clap plugin is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Clap plugin. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/

// function pluginprefix_setup_post_type() {
//     // register the "book" custom post type
//     register_post_type( 'book', ['public' => 'true'] );
// }
// add_action( 'init', 'pluginprefix_setup_post_type' );
 
function pluginprefix_install() {
    // trigger our function that registers the custom post type
    // pluginprefix_setup_post_type();
 
    // clear the permalinks after the post type has been registered
    // flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'pluginprefix_install' );