<?php

/*
        Plugin Name: Advanced Custom Fields: Auto PHP Export
        Plugin URI: https://github.com/agency/acf-auto-export
        Description: This Advanced Custom Fields Add-on automatically exports all fields to PHP on save or update, and reads them from PHP when set.
        Version: 0.1
        Author: Agency
        Author URI: http://agency.sc/
        License: GPL2

    Copyright 2013 AGENCY STRATEGIC CREATIVE  (email : digital@agency.sc)

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

// Constants
define('ACF_EXPORT_DIR', plugin_dir_path( __FILE__ ));

// Settings
add_action( 'wp_loaded', 'acf_auto_export_init_options' );
function acf_auto_export_init_options() {
	add_action('admin_menu', 'acf_auto_export_add_options');
}

function acf_auto_export_add_options() {  
    add_submenu_page(
    	'edit.php?post_type=acf',
    	'Settings',
    	'Auto Export',
    	'edit_posts',
    	'auto_export',
    	'acf_auto_export_options'
    );  
}

function acf_auto_export_options() {
	?>
	<div class="wrap">  
        <h2>Auto Export Options</h2>  
        <form method="post" action="options.php">  
            <?php wp_nonce_field('update-options'); ?>
            <p>Make sure you unpublish or remove existing database fields before enabling this options.</p> 
            <p>
            	<label for="acf_auto_export_use_php">
            		<input type="checkbox" name="acf_auto_export_use_php" value="1" <?php if (get_option('acf_auto_export_use_php')) echo 'checked'; ?> /> 
            		Use PHP Fields</label>
            </p>
            <p><input type="submit" class="button-primary" name="Submit" value="Update" /></p>  
            <input type="hidden" name="action" value="update" />  
            <input type="hidden" name="page_options" value="acf_auto_export_use_php" />  
        </form>  
    </div>  
	<?php
}


// Load PHP Fields
add_action( 'plugins_loaded', 'acf_auto_export_fields' );
function acf_auto_export_fields() {
	if (get_option('acf_auto_export_use_php') == '1')
		require_once(ACF_EXPORT_DIR . 'acf-fields.php');
}

// Run Export
add_action('admin_head-post.php', 'acf_auto_export');
function acf_auto_export() {
	
	global $acf;

	$file = ACF_EXPORT_DIR . 'acf-fields.php';

	if (get_post_type() !== 'acf') {
		return;
	}

	if ( empty($_GET['message']) || ($_GET['message'] != '1' && $_GET['message'] != '6') ) {
		return;
	}

	$acfs = array();
		
	$acfs = get_posts(array(
		'numberposts' 	=> -1,
		'post_type' 	=> 'acf',
		'orderby' 		=> 'menu_order title',
		'order' 		=> 'asc',
		'suppress_filters' => false,
	));

	if ($acfs) {
		
		$output = __('<?php if(function_exists("register_field_group")) {');

		foreach( $acfs as $i => $field ) {

			// populate acfs
			$var = array(
				'id' => $field->post_name,
				'title' => $field->post_title,
				'fields' => apply_filters('acf/field_group/get_fields', array(), $field->ID),
				'location' => apply_filters('acf/field_group/get_location', array(), $field->ID),
				'options' => apply_filters('acf/field_group/get_options', array(), $field->ID),
				'menu_order' => $field->menu_order,
			);
			
			$var['fields'] = apply_filters('acf/export/clean_fields', $var['fields']);


			// create html
			$html = var_export($var, true);
			
			// change double spaces to tabs
			$html = str_replace("  ", "\t", $html);
			
			// correctly formats "=> array("
			$html = preg_replace('/([\t\r\n]+?)array/', 'array', $html);
			
			// Remove number keys from array
			$html = preg_replace('/[0-9]+ => array/', 'array', $html);
			
			// add extra tab at start of each line
			$html = str_replace("\n", "\n\t", $html);

			// append to output
			$output .= 'register_field_group(' . $html . ');';
		}

		$output .= '}';
	}

	if (is_writable($file)) {
		file_put_contents($file, $output);
		add_action('admin_notices', 'acf_auto_export_success');
	} else {
		add_action('admin_notices', 'acf_auto_export_fail');
	}

}

// Messages
function acf_auto_export_success() {
	echo '<div class="updated"><p>Fields saved to PHP file</p></div>';
}

function acf_auto_export_fail() {
	echo '<div class="updated"><p>Could not save fields to file. File not writable.</p></div>';
}