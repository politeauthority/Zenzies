<?php
/**
 * @package WordPress
 * @subpackage Zenzies
 */

get_header(); 
?>




	<?php while ( have_posts() ) : the_post();
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		?>

		<div id="single_post_page" class="container-fluid">
			<div class="single_feat_img">
				<img class="featured_img_bg" src="<?php echo $image[0]; ?>">
			</div>

			<div id="post" class="row-fluid span12" >
				<h2><?php single_post_title(); ?></h2>

					<? the_content(); ?>
			</div>
		</div>

	<?php endwhile; // end of the loop. ?>
</div>


















  </body>
</html>
