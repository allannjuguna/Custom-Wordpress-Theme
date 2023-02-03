<?php get_header();?>

<br/><div class="container">

	<div class="mycontent">

		<?php


		if(have_posts()){
				while(have_posts()):the_post();
					
					echo '<div class="post-container">';
					

					echo '<h2>Title : ';
					the_title();
					echo '</h2>';
					echo '<br/>';

					echo '';
					the_post_thumbnail('thumbnail');
					echo '<br/>';


					echo '<p>';
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