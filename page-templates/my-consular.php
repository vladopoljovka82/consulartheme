<?php
/*
Template Name: My Consular
*/
get_header(); ?>



<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="conusular" role="main">
		<div class="consular-intro my-consular">

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

<section class="c-form c-myc" >
	<div class="form-intro">

		<h2>User login</h2>
	</div>

	<form class="form-myc">
		<input class= "username" type="text" name="username" placeholder="User Name">
		<input  class= "password" type="password" name="password" placeholder="Password">
		<div class="submit-section">
			<input type="submit" value="Login">
			<a class="forg-pass" href="#">Forgotten password?</a>
		</div>
	</form>
</section>

<?php get_footer();
