<?php
// Template Name: My Account
get_header();
?>
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<?php echo do_shortcode( '[woocommerce_my_account]' ); ?>
			</div>
		</div>
	</div>
<?php
get_footer();