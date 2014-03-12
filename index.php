<?php
/**
 * @package WordPress
 * @subpackage Zenzies
 */

get_header(); 
?>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <img src="../assets/img/examples/slide-01.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Example headline.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="#">Sign up today</a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="../assets/img/examples/slide-02.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>Another example headline.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="#">Learn more</a>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="../assets/img/examples/slide-03.jpg" alt="">
      <div class="container">
        <div class="carousel-caption">
          <h1>One more for good measure.</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <a class="btn btn-large btn-primary" href="#">Browse gallery</a>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div><!-- /.carousel -->

    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="span4">
			<?php get_sidebar( $name ); ?>
    </div><!-- /.span4 -->
    <div class="span4">
      <img class="img-circle" data-src="holder.js/140x140">
      <h2>Heading</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
    <div class="span4">
      <img class="img-circle" data-src="holder.js/140x140">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div><!-- /.span4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

	<?php if (have_posts()) : 
		$remaining_posts = array();
		?>
  	<hr class="featurette-divider">
		<?php while (have_posts()) : the_post(); $loopcounter++;
			// First two posts get full width
			if( $loopcounter < 3 ) :
				?>
			  <div class="featurette">
			  	<?php
			  		if( $loopcounter % 2 == 0 ){
			  			$img_class = 'pull-left';
			  		} else {
			  			$img_class = 'pull-right'; 
			  		}
			  		?>

					<?php echo get_the_post_thumbnail( $post_id, array( 400, 400 ), array( 'class' => 'featurette-image ' . $img_class ) ); ?>
			    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__( 'Permanent Link to %s' ), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
			    <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.  Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>

			  </div>
	  		<hr class="featurette-divider">
	  	<?php else : 
				// Rest of the Posts are Split!
	  		$remaining_posts[] = the_posts(); 
	  		?>
	  			<div class="span8 pull-left">
	  				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__( 'Permanent Link to %s' ), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h2>
					</div>
			<?php endif; ?>		

		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; 

//	alix data dump	{debug}	
echo "<pre>"; print_r( $remaining_posts ); die();

	?>		

	<div class="span4 pull-right">
		SIDEBAR!
	</div>



  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->

<?php get_footer(); ?>