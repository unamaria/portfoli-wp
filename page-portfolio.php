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
						<?php $image_path = wp_upload_dir(); ?>
						<img src="<?php echo $image_path['url']; ?>/<?php echo get_post_meta($post->ID, 'image', $single=true) ?>"
						sizes="<?php echo tevkori_get_sizes( the_ID(), '500' ); ?>"
						> 
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>

					</div>
	
					<p class="archive"><a href="<?php the_permalink(); ?>" title="Read more">Read more →</a></p>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				</div>

				<?php endwhile; ?>
			</div>	
		</section>
	</main>

<?php get_footer(); ?>
