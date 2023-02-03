<?php get_header();?>


<br/><div class="container">
	<?php get_sidebar(); ?>

	<div class="mycontent">

		<?php


		if(have_posts()){
				while(have_posts()):the_post();
					
					echo '<div class="post-container">';
					
					// echo '<h2>Title : </h2>';
					// the_post_thumbnail('thumbnail');
					// echo '</div><br/>';

					echo '<h2>Title : ';
					the_title();
					echo '</h2>';
					echo '<br/>';


					// echo '<p>category : ';
					// the_category();
					// echo '</p>';
					// echo '<br/>';

					echo '<h3>content: </h3>  <p>';
					the_content();
					echo '</p>';
					echo '<br/>';

					echo '<p>Time : ';
					the_time();
					echo '</p>';
					echo '<br/>';


					echo '</div>';


				endwhile;
			}


		?>




	</div>
</div><br/>
<?php get_footer();?>