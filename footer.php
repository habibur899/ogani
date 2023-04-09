<!-- Footer Section Begin -->
<footer class="footer spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="footer__about">
					<div class="footer__about__logo">
						<a href="<?php echo esc_url( site_url() ) ?>"><img
								src="<?php $footer_logo = get_field( 'footer_logo', 'option' );
								if ( $footer_logo ) {
									echo esc_url( $footer_logo );
								} ?>" alt=""></a>
					</div>
					<ul>
						<li><?php $footer_address = get_field( 'footer_address', 'option' );
							if ( $footer_address ) {
								echo esc_html( $footer_address );
							} ?></li>
						<li><?php $footer_phone = get_field( 'footer_phone', 'option' );
							if ( $footer_phone ) {
								echo esc_html( $footer_phone );
							} ?></li>
						<li><?php $footer_email = get_field( 'footer_email', 'option' );
							if ( $footer_email ) {
								echo esc_html( $footer_email );
							} ?></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
				<?php
				if ( is_active_sidebar( 'footer-widget' ) ) {
					dynamic_sidebar( 'footer-widget' );
				}
				?>

			</div>
			<div class="col-lg-4 col-md-12">
				<div class="footer__widget">
					<h6><?php $footer_newslater_title = get_field( 'newslater_title', 'option' );
						if ( $footer_newslater_title ) {
							echo esc_html( $footer_newslater_title );
						} ?></h6>
					<p><?php $footer_newslater_descriptione = get_field( 'newslater_description', 'option' );
						if ( $footer_newslater_descriptione ) {
							echo esc_html( $footer_newslater_descriptione );
						} ?></p>
					<?php
					$newslater_form_field = get_field( 'newslater_shortcode', 'option' );
					if ( $newslater_form_field ) {
						echo do_shortcode( $newslater_form_field );
					}
					?>
					<div class="footer__widget__social">
						<?php
						$footer_socials = get_field( 'footer_social', 'option' );
						if ( $footer_socials ) {
							foreach ( $footer_socials as $footer_social ) {
								?>
								<a href="<?php echo esc_url( $footer_social['footer_social_url'] ) ?>"><i
										class="<?php echo esc_attr( $footer_social['footer_social_icon'] ) ?>"></i></a>
								<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="footer__copyright">
					<div class="footer__copyright__text">
						<p><?php $footer_copyright = get_field( 'footer_copyright', 'option' );
							if ( $footer_copyright ) {
								echo wp_kses_post( $footer_copyright );
							} ?></p>
					</div>
					<div class="footer__copyright__payment"><img
							src="<?php $footer_copyright_image = get_field( 'footer_payment_image', 'option' );
							if ( $footer_copyright_image ) {
								echo $footer_copyright_image;
							} ?>" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer Section End -->


<?php wp_footer(); ?>
</body>

</html>