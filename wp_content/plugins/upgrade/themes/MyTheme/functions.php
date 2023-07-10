<?php 
function ThemeDevelopment_menu(){
	register_nav_menu('primary','Top Navigation');
}

add_action('init','ThemeDevelopment');

/*function ThemeDevelopment_footer_menu(){
	register_nav_menu('footer','Footer Navigation');
}

add_action('int_ThemeDevelopment_footer_menu');


add_theme_support('post-thumnails'); /*featured imgae funcion */

if(function_exists('register_sidebar')){
	register_sidebar(array(
	'name' => 'Right Sidebar',
	'before' => '<h2>',
	'after' => '</h2>',
));

register_sidebar(array(
	'name' => 'Left Sidebar',
	'before' => '<h2>',
	'after' => '</h2>',
));
}
?>