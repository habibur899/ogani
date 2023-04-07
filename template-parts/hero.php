<!-- Hero Section Begin -->
<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="hero__categories">
					<div class="hero__categories__all">
						<i class="fa fa-bars"></i>
						<span>All departments</span>
					</div>
					<ul>
						<?php
						$args = array(
							'taxonomy'   => 'product_cat',
							'hide_empty' => true,
						);
						$cats = get_categories( $args );
						foreach ( $cats as $cat ) {
							?>
							<li><a href="<?php echo get_category_link( $cat->term_id ) ?>"><?php echo $cat->name ?></a>
							</li>
							<?php
						}
						?>

					</ul>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="hero__search">
					<div class="hero__search__form">
						<form action="#">
							<div class="hero__search__categories">
								All Categories
								<span class="arrow_carrot-down"></span>
							</div>
							<input type="text" placeholder="What do yo u need?">
							<button type="submit" class="site-btn">SEARCH</button>
						</form>
					</div>
					<div class="hero__search__phone">

						<?php
						$header_phone = get_field( 'phone', 'option' );
						if ( $header_phone ) {
							echo '<div class="hero__search__phone__icon"><i class="fa fa-phone"></i></div>';
						}
						?>


						<div class="hero__search__phone__text">
							<h5><?php
								$header_phone = get_field( 'phone', 'option' );
								if ( $header_phone ) {
									echo $header_phone;
								}
								?></h5>
							<span><?php
								$header_phone_subtitle = get_field( 'phone_subtitle', 'option' );
								if ( $header_phone_subtitle ) {
									echo $header_phone_subtitle;
								}
								?></span>
						</div>
					</div>
				</div>
				<?php
				$banner = get_field( 'banner', 'option' );
				if ( $banner ):
					?>
					<div class="hero__item set-bg"
					     data-setbg="<?php echo esc_url( $banner['banner_background'] ) ?>">
						<div class="hero__text">
							<span><?php echo esc_html( $banner['banner_subtitle'] ) ?></span>
							<h2><?php echo wp_kses_post( $banner['banner_title'] ) ?></h2>
							<p><?php echo esc_html( $banner['banner_description'] ) ?></p>
							<a href="<?php echo esc_url( $banner['link'] ) ?>"
							   class="primary-btn"><?php echo esc_html( $banner['button_text'] ) ?></a>
						</div>
					</div>
				<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<!-- Hero Section End -->