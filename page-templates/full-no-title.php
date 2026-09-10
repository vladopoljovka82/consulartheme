<?php
/*
Template Name: Full width no title
*/
get_header(); ?>



<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="conusular" role="main">
		<div class="consular-intro">

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>

				<?php do_action( 'foundationpress_page_before_comments' ); ?>
				<?php comments_template(); ?>
				<?php do_action( 'foundationpress_page_after_comments' ); ?>
			</div>

		</div>
		
		</section>
	<?php endwhile; ?>

	<?php get_footer();
