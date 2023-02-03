</!DOCTYPE html>
<html>
<head>
	<title>Custom Theme - Assessment 4</title>
	<!-- Linking the head part -->
	<?php wp_head(); ?>
	<!-- Adding the menu to our page -->
	<?php 
		$specs=array(
			'menu'				=>	'Main NavMenu',
			'theme_location'	=> 'primary', // calling the primary menu
			'container'			=> 'div',
		);
		wp_nav_menu($specs);
	?>
</head>
<?php 
// Enables us to add custom classes for the body

	if (is_front_page()){
		$css_classes=array('assessment-theme','home-css');
		// echo "<h>This is the front page</h><br/>";
	}else{
		$css_classes=array('assessment-theme','page-css');
		// echo "<h>This is not the front page</h><br/>";
	}
?>

<body <?php body_class($css_classes); ?>>
<br>






