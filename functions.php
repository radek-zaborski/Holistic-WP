<?php

add_filter('show_admin_bar', '__return_false');

/**
 * Adjust contact form 7 radios and checkboxes to match bootstrap 4 custom radio structure.
 */

add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<label><input type="(checkbox|radio)" name="(.*?)" value="(.*?)" \/><span class="wpcf7-list-item-label">/i', '<label class="custom-control custom-\1"><input type="\1" name="\2" value="\3" class="custom-control-input"><span class="wpcf7-list-item-label custom-control-label">', $content);

    return $content;
});

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Nagłówek',
		'menu_title'	=> 'Nagłówek',
		'menu_slug' 	=> 'Nagłówek',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
    acf_add_options_page(array(
		'page_title' 	=> ' Stopka',
		'menu_title'	=> ' Stopka',
		'menu_slug' 	=> 'Stopka',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	

    
	
}

?>