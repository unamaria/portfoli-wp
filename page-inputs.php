<?php

    /*
        Template Name: Outputs
    */

?>

<?php get_header(); ?>

	<main class="outputs">

		<section class="dark-section books">
			<div class="inner_main">
				<h2>Readings</h2>
				<?php $args = array( 'post_type' => 'books', 'posts_per_page' => 10 ); ?>
				<?php $loop = new WP_Query( $args ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post();?>
					<figure class="card figure-card book-card">
							<?php $image_path = wp_upload_dir(); ?>
						    <img src="<?php echo $image_path['url']; ?>/<?php echo get_post_meta($post->ID, 'image', $single=true) ?>" >
						<figcaption>
						    <h3><?php the_title(); ?></h3>
						    <h4><?php echo get_post_meta($post->ID, 'author', $single=true) ?></h4>
					    </figcaption> 
					</figure>
				<?php endwhile; ?>
			</div> <!-- END .inner_main -->
		</section>
	</main>

<?php get_footer(); ?>