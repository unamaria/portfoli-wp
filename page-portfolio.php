<?php

    /*
        Template Name: Portfolio
    */

?>

<?php get_header(); ?>

	<main>
		<section class="writing">
			<div class="inner_main">
				<h2>Portfolio</h2>

				<?php $args = array( 'post_type' => 'projects', 'posts_per_page' => 10 ); ?>
				<?php $loop = new WP_Query( $args ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="post" id="post-<?php the_ID(); ?>">

					<div class="entry">
						<img src="<?php echo get_post_meta($post->ID, 'image_small', $single=true) ?>" border="0" target="blank"> 
						<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>

					</div>

					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				</div>
				<?php endwhile; ?>
			</div>	
		</section>
	</main>

<?php get_footer(); ?>
