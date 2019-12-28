<?php
/**
 * The template for displaying the archive of case studies
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php query_posts('posts_per_page=3&post_type=case_studies&order=ASC'); ?>
				<?php while ( have_posts() ) : the_post(); 
					$services = get_field('services');
					$image_1 = get_field('image_1');
					$size = "full";
				?>
					<article class="case-study">
					    <aside class="case-study-sidebar">
					        <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					        <h5 class="services"><?php echo $services; ?></h5>

					        <?php the_excerpt(); ?>

					        <p class="read-more-link"><a href="<?php the_permalink(); ?>">View Project &rsaquo;</a></p>
					    </aside>

					    <div class="case-study-images">
					    	<a href="<?php the_permalink(); ?>">
						     	<figure class="case-study-image">
							     	<?php if($image_1){
							     		echo wp_get_attachment_image($image_1, $size);
							     	} ?>  	
							    </figure>
							</a>
					    </div>
					</article>
				<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->
	<nav id="navigation" class="container">
		<div class="left"><a href="<?php echo site_url('/blog/') ?>">&larr; <span>Back to Work</span></a></div>
	</nav>

<?php get_footer(); ?>
