<?php
//Template Name: Contact
get_header();

?>

	<!-- Hero Section Begin -->
	<section class="hero hero-normal">
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="hero__categories">
						<div class="hero__categories__all">
							<i class="fa fa-bars"></i>
							<span>All departments</span>
						</div>
						<ul>
							<li><a href="#">Fresh Meat</a></li>
							<li><a href="#">Vegetables</a></li>
							<li><a href="#">Fruit & Nut Gifts</a></li>
							<li><a href="#">Fresh Berries</a></li>
							<li><a href="#">Ocean Foods</a></li>
							<li><a href="#">Butter & Eggs</a></li>
							<li><a href="#">Fastfood</a></li>
							<li><a href="#">Fresh Onion</a></li>
							<li><a href="#">Papayaya & Crisps</a></li>
							<li><a href="#">Oatmeal</a></li>
							<li><a href="#">Fresh Bananas</a></li>
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
							<div class="hero__search__phone__icon">
								<i class="fa fa-phone"></i>
							</div>
							<div class="hero__search__phone__text">
								<h5>+65 11.188.888</h5>
								<span>support 24/7 time</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero Section End -->

	<!-- Breadcrumb Section Begin -->
	<section class="breadcrumb-section set-bg"
	         data-setbg="<?php echo get_template_directory_uri(); ?>/img/breadcrumb.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="breadcrumb__text">
						<h2><?php the_title() ?></h2>
						<div class="breadcrumb__option">
							<a href="<?php echo site_url() ?>"><?php echo esc_html( 'Home' ) ?></a>
							<span><?php the_title() ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Section End -->

	<!-- Contact Section Begin -->
	<section class="contact spad">
		<div class="container">
			<div class="row">
				<?php
				$contact_info = get_field( 'contact_info', 'option' );
				if ( $contact_info ) {
					foreach ( $contact_info as $single_contact_info ) {
						?>
						<div class="col-lg-3 col-md-3 col-sm-6 text-center">
							<div class="contact__widget">
								<span
									class="<?php echo esc_attr( $single_contact_info['contact_info_icon'] ) ?>"></span>
								<h4><?php echo esc_html( $single_contact_info['contact_info_title'] ) ?></h4>
								<p><?php echo esc_html( $single_contact_info['contact_info_description'] ) ?></p>
							</div>
						</div>
						<?php
					}
				}
				?>

			</div>
		</div>
	</section>
	<!-- Contact Section End -->

	<!-- Map Begin -->
	<div class="map">
		<?php
		$google_map = get_field( 'google_map', 'option' );
		if ( $google_map ) {
			echo $google_map;
		}
		?>
	</div>
	<!-- Map End -->

	<!-- Contact Form Begin -->
	<div class="contact-form spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="contact__form__title">
						<h2><?php
							$contact_form_title = get_field( 'contact_form_title', 'option' );
							if ( $contact_form_title ) {
								echo $contact_form_title;
							} ?></h2>
					</div>
				</div>
			</div>
			<?php
			$contact_form_field = get_field( 'contact_form_shortcode', 'option' );
			if ( $contact_form_field ) {
				echo do_shortcode( $contact_form_field );
			}
			?>

		</div>
	</div>
	<!-- Contact Form End -->
<?php get_footer() ?>