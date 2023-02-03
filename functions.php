<?php



/*Functions with the fn_ prefix are my custom functions*/
function fn_linking_styles_and_scripts(){
/* Linking css/custom.css */
	wp_enqueue_style('customstyle',get_template_directory_uri().'/css/custom.css',array(),'1.0.0','all');


	/* Linking js/custom.js */
	wp_enqueue_script('customscript',get_template_directory_uri().'/js/custom.js',array(),'1.0.0',true); // when set to true js is added to the top and when false, js is added to bottom

}


add_action('wp_enqueue_scripts','fn_linking_styles_and_scripts');



/* Creating the menu section for our theme header*/

function fn_create_nav_menu(){
	add_theme_support('menu');
	register_nav_menu('primary','Main NavMenu');
	register_nav_menu('secondary','Footer Menu');
}
// Invoking the create menu function
add_action('init','fn_create_nav_menu');




/* 3. CREATING A CUSTOM SIDEBAR */
function fn_custom_sidebar_widget(){ // Creating the sidebar function
	$array_sidebar_specs=array(
		'name' => 'Assessment_Sidebar',
		'id'=> 'sidebar-1',
		'class'=> 'custom',
		'description'=> 'This is the custom sidebar for Asessement 4',
		'before_widget'=> '<li id="%1$s" class="widget %2$s">',
		'after_widget'=> "</li>\n",
		'before_title'=> '<h2 class="widgettitle">',
		'after_title'=> "</h2>\n",
		'before_sidebar'=> '',
		'after_sidebar'=> '',
		'show_in_rest'=> false,
	);
	register_sidebar($array_sidebar_specs);
}
// Now we invoke the function that will create the sidebar
add_action('widgets_init','fn_custom_sidebar_widget');
// Add items to the sidebar in Appearance->Widgets - Assessment_Sidebar
// Now create the sidebar in sidebar.php :)



?>