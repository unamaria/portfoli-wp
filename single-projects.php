<?php get_header(); the_post() ?>

<main>
		<article id="post-<?php the_ID(); ?>">
			
			<div class="inner_article">
				<h2 id="post-title"><?php the_title(); ?></h2>
				
				<img src="<?php echo get_post_meta($post->ID, 'image_large', $single=true) ?>" border="0" target="blank"> 
				
				<div class="entry">
					
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>
				
				</div>
			<p class="archive"><a href="<?php echo get_permalink(44); ?>" title="Go back to portfolio">← Back to portfolio</a></p>
				
				<?php edit_post_link('Edit this entry','','.'); ?>
				

			</div>
		</article>
</main>

<?php get_footer(); ?>
