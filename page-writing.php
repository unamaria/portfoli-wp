<?php

    /*
        Template Name: Writing
    */

?>

<?php get_header(); ?>

	<main>
		<section class="writing">
			<div class="inner_main">
				<h2>Writing</h2>
				<?php query_posts("posts_per_page=10"); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
				<div class="post" id="post-<?php the_ID(); ?>">

					<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>


					<div class="entry">

						<?php the_excerpt(); ?>

					</div>
					<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

				</div>
				<?php endwhile; endif; ?>
			</div> <!-- END .inner-main -->
		</section>

	</main>

<?php get_footer(); ?>