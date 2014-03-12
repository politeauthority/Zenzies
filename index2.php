<?php
/**
 * @package WordPress
 * @subpackage Zenzies
 */

get_header(); 
?>

<div id="featuredCarousel" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>


  <div class="carousel-inner">	
		<?php
		  $featured_posts = get_posts( array( 'category' => 2 ) );

		  foreach ( $featured_posts as $key => $post) {
		  	if( has_post_thumbnail( $post->ID ) ){
		  		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		  		?>
			    <div class="<?php if( $key == 0 ){ echo "active"; } ?> item">
			      <img src="<?php echo $image[0]; ?>" />

						<div class="carousel-caption">
							<h4><?php echo get_the_title( $post->ID ); ?></h4>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
						</div>


			    </div>
			    <?php

		  	}
		  }
		?>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>


<div class="container-fluid">
	<div class="row-fluid">
		<div class="span8">
			<ul>
				<li>
					<h6>Dummy Title</h6>
					<p>This is a span8 section</p>
				</li>
				<li>
					<h6>Dummy Title</h6>
					<p>This is a span8 section</p>
				</li>
				<li>
					<h6>Dummy Title</h6>
					<p>This is a span8 section</p>
				</li>				
			</ul>

		</div>
		<div class="span4">
			Some Cool Side Bar content here in this span4 section. Probably an Ad right up top
		</div>
	</div>
</div>


  </body>
</html>
