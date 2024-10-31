<?php
/**
 * @package Remove_Default_Canonical_Links
 * @version 0.1.1
 */
/*
Plugin Name: Remove Default Canonical Links
Plugin URI: http://joostschuur.com/wordpress/
Description: Quick plugin to remove the default canonical links that WordPress now adds for you since 2.9. You'd want to do this if you're managing your canonical links through other means.
Author: Joost Schuur
Version: 0.1.1
Author URI: http://joostschuur.com/
*/

/*  Copyright 2010  Joost Schuur  (email : jschuur@jschuur.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/** Yeah, it's really this simple */
remove_action('wp_head', 'rel_canonical');

?>
