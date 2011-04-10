<?php
/*
Plugin Name: TinyMCE additions
Plugin URI: http://blog.rowbory.co.uk/sw/wordpress/simpler_editor_styles
Description: Simplifies TinyMCE's list of format options to be the ones that make sense, given H1 and H2 should not be used.
Version: 0.1
Author: David Rowbory
Author URI: http://www.rowbory.co.uk
*/
/**
 * David Rowbory's Simpler Editor Styles
 *
 * @category      Wordpress Plugins
 * @package       Plugins
 * @author        David Rowbory
 * @copyright     Yes, Open source
 * @version       v 0.1
 * By David Rowbory www.rowbory.co.uk January 2011.
*/

/*  
	Copyright 2010 David Rowbory (wordpress@m.rowbory.co.uk)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
    
    http://www.gnu.org/licenses/gpl.html
*/

if (is_admin()) {
	add_filter('tiny_mce_before_init','tinymce_refine_format');
}

/*
Customises the list of styles available in the editor.
*/
function tinymce_refine_format($initvalues) {
	//echo "<!-- init values ";
	//var_dump($initvalues);
	//echo " -->";
	$initvalues["theme_advanced_blockformats"]="h3,h4,p,sub,sup,blockquote,h1,h2";
	return $initvalues;
}

?>