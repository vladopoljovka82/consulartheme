<?php
/*
Template Name: Register
*/
get_header(); ?>



<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<section class="conusular" role="main">
		<div class="consular-intro c-privacy">

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
<section class="c-form c-regform">
	<div class="form-intro">
		
		<h2>Register</h2>

		<div class="enquiries">
			<h5>Enquiries</h5>
			<p>Tel: <a href="tel:08458880011">0845 888 0011</a></p>
			<p>Fax: <a href="fax:08701316276">08701 316 276</a></p>
			<p>Email:<a href="mailto:info@consular.com">info@consular.com</a></p>
		</div>
		<div clas="openinghours">
			<h5>Opening Hours</h5>
			<p><strong>Monday to Friday:</strong></p>
			<p>9:30 am to 5.30pm</p>
		</div>
	</div>

	<form class="form-myc">
		<input class= "name" type="text" name="name" placeholder="Full Name" tabindex="1">
		<input class= "companyname" type="text" name="companyname" placeholder="Company Name" tabindex="2">
		<input class= "email" type="email" name="email" placeholder="Email" tabindex="3">
		<input class= "phone" type="number" name="phone" placeholder="Phone" tabindex="4">
		<input class= "address1" type="text" name="address1" placeholder="Address Line 1" tabindex="5">
		<input class= "address2" type="text" name="address2" placeholder="Address Line 2" tabindex="6">
		<input class= "postal" type="text" name="potal" placeholder="Postal Code" tabindex="7">


		<div class="submit-section">
			<p>By clicking submit below, you consent to allow Consularto store and process the personal information submitted above to provide you the service requested.</p>
			<input type="submit" value="Submit">
		</div>
	</form>
</section>
<?php get_footer();
