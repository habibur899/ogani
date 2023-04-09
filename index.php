<?php get_header() ?>

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
						<h2>Blog</h2>
						<div class="breadcrumb__option">
							<a href="<?php echo esc_url( site_url() ) ?>">Home</a>
							<span>Blog</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Breadcrumb Section End -->

	<!-- Blog Section Begin -->
	<section class="blog spad">
		<div class="container">
			<div class="row">
				<?php
				get_sidebar();
				?>
				<div class="col-lg-8 col-md-7">
					<div class="row">
						<?php
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post();

								?>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="blog__item">
										<div class="blog__item__pic">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="blog__item__text">
											<ul>
												<li>
													<i class="fa fa-calendar-o"></i> <?php echo esc_attr( get_the_date() ) ?>
												</li>
												<li><i class="fa fa-comment-o"></i> <?php comments_number()?></li>
											</ul>
											<h5><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
											<p><?php echo wp_trim_words( get_the_content(), 15, ' ' ) ?></p>
											<a href="<?php the_permalink(); ?>" class="blog__btn">READ MORE <span
													class="arrow_right"></span></a>
										</div>
									</div>
								</div>
								<?php
							}
						}
						?>

						<div class="col-lg-12">
							<div class="product__pagination blog__pagination">
								<?php echo paginate_links(array(
									'prev_text'          => __( '<i class="fa fa-long-arrow-left"></i>' ),
									'next_text'          => __( '<i class="fa fa-long-arrow-right"></i>' ),
								)) ?>
<!--								<a href="#">1</a>-->
<!--								<a href="#">2</a>-->
<!--								<a href="#">3</a>-->
<!--								<a href="#"><i class="fa fa-long-arrow-right"></i></a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Section End -->
<?php get_footer() ?>