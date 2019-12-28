<?php
/**
 * The template for displaying a single case study.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); 
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$image_2 = get_field('image_2');
				$image_3 = get_field('image_3');
				$size = "full";
			?>
				<article class="case-study">
				     <aside class="case-study-sidebar">
				          <h2 class="title"><?php the_title(); ?></h2>
				          <h5 class="services"><?php echo $services; ?></h5>
				          <h6 class="client"><span>Client: <?php echo $client ?></span></h6>

				          <?php the_content(); ?>

				          <p class="read-more-link"><a href="<?php echo $link ?>">Visit Live Site &rsaquo;</a></p>
				     </aside>

				     <div class="case-study-images">
				     	<div class="case-study-image">
					     	<?php if($image_1){
					     		echo wp_get_attachment_image($image_1, $size);
					     	} ?>  	
					    </div>
					    <div class="case-study-image">
					     	<?php if($image_2){
					     		echo wp_get_attachment_image($image_2, $size);
					     	} ?>
					    </div> 	
					    <div class="case-study-image">
					     	<?php if($image_3){
					     		echo wp_get_attachment_image($image_3, $size);
					     	} ?>
					    </div>
				     </div>
				</article>
		
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->
	<nav id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to Work</span></a></div>
	</nav>

<?php get_footer(); ?>

