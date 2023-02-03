<footer>
</footer>
</body>
<?php wp_footer();?>

<!-- Adding the footer menu -->
<?php 
	$specs=array(
		'menu'				=>	'Footer Menu',
		'theme_location'	=> 'secondary', // calling the primary menu
		'container'			=> 'div',
	);
	wp_nav_menu($specs);
?>
</html>