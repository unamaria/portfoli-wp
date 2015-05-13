<?php

    /*
        Template Name: Outputs
    */

?>

<?php get_header(); ?>

	<main>
		<section class="writing">
			<div class="inner_main">
				<h2>Writing</h2>
				<?php query_posts("posts_per_page=3"); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<div class="post" id="post-<?php the_ID(); ?>">

					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>


					<div class="entry">

						<?php the_excerpt(); ?>

					</div>

					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				</div>
				<?php endwhile; endif; ?>
			<p class="archive"><a href="<?php echo get_permalink(31); ?>" title="Go see more posts">View archive →</a></p>
			</div> <!-- END .inner-main -->
		</section>

		<section class="photos">
			<div class="inner_main">
				<h2>Photos</h2>
				<figure class="photo-card">
					<picture>
						<source
					        media="(min-width: 750px)"
					        srcset="<?php bloginfo('template_url'); ?>/images/IMG_2862-1600_large_2x.jpg 2x, <?php bloginfo('template_url'); ?>/images/IMG_2862-800_large_1x.jpg">
					    <source
					        media="(min-width: 500px)"
					        srcset="<?php bloginfo('template_url'); ?>/images/IMG_2862-1000_medium_2x.jpg">  
					    <img src="<?php bloginfo('template_url'); ?>/images/IMG_2862-500_medium_1x.jpg" alt="Davis mountains">
					</picture>
				</figure>
				<figure class="photo-card">
					<picture>
						<source
					        media="(min-width: 750px)"
					        srcset="<?php bloginfo('template_url'); ?>/images/IMG_3086-1600_large_2x.jpg 2x, <?php bloginfo('template_url'); ?>/images/IMG_3086-800_large_1x.jpg">
					    <source
					        media="(min-width: 500px)"
					        srcset="<?php bloginfo('template_url'); ?>/images/IMG_3086-1000_medium_2x.jpg">  
					    <img src="<?php bloginfo('template_url'); ?>/images/IMG_3086-500_medium_1x.jpg" alt="Davis mountains">
					</picture>
				</figure>
				<figure class="photo-card">
					<picture>
						<source
					        media="(min-width: 750px)"
					        srcset="<?php bloginfo('template_url'); ?>/images/IMG_3367-1600_large_2x.jpg 2x, <?php bloginfo('template_url'); ?>/images/IMG_3367-800_large_1x.jpg">
					    <source
					        media="(min-width: 500px)"
					        srcset="<?php bloginfo('template_url'); ?>/images/IMG_3367-1000_medium_2x.jpg">  
					    <img src="<?php bloginfo('template_url'); ?>/images/IMG_3367-500_medium_1x.jpg" alt="Davis mountains">
					</picture>
				</figure>
			<p class="archive"><a href="https://www.flickr.com/photos/unamaria/" title="Go see more photos on Flickr" target="_blank">View more on Flickr →</a></p>	
			</div> <!-- END .inner_main -->
		</section>
	</main>

<?php get_footer(); ?>