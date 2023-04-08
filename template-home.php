<?php
//Template Name: Home
get_header();
get_template_part( '/template-parts/hero' );
global $product;
?>


	<!-- Categories Section Begin -->
	<section class="categories">
		<div class="container">
			<div class="row">
				<div class="categories__slider owl-carousel">

					<?php $catTerms = get_terms( 'product_cat', array(
						'hide_empty' => 0,
						'orderby'    => 'ASC',
						'exclude'    => '16'
					) );
					foreach ( $catTerms as $catTerm ) :
						$thumbnail_id = get_woocommerce_term_meta( $catTerm->term_id, 'thumbnail_id', true );
						$image_link = wp_get_attachment_url( $thumbnail_id );
						$cat_link   = get_term_link( $catTerm );
						?>
						<div class="col-lg-3">
							<div class="categories__item set-bg"
							     data-setbg="<?php echo esc_url( $image_link ) ?>">
								<h5><a href="<?php echo esc_url( $cat_link ); ?>"><?php echo $catTerm->name; ?></a></h5>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Categories Section End -->

	<!-- Featured Section Begin -->
	<section class="featured spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title">
						<h2>Featured Product</h2>
					</div>
					<div class="featured__controls">
						<ul>
							<li class="active" data-filter="*">All</li>
							<li data-filter=".oranges">Oranges</li>
							<li data-filter=".fresh-meat">Fresh Meat</li>
							<li data-filter=".vegetables">Vegetables</li>
							<li data-filter=".fastfood">Fastfood</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row featured__filter">
				<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
					<div class="featured__item">
						<div class="featured__item__pic set-bg"
						     data-setbg="<?php echo get_template_directory_uri() ?>/img/featured/feature-1.jpg">
							<ul class="featured__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="featured__item__text">
							<h6><a href="#">Crab Pool Security</a></h6>
							<h5>$30.00</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
					<div class="featured__item">
						<div class="featured__item__pic set-bg"
						     data-setbg="<?php echo get_template_directory_uri() ?>/img/featured/feature-2.jpg">
							<ul class="featured__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="featured__item__text">
							<h6><a href="#">Crab Pool Security</a></h6>
							<h5>$30.00</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
					<div class="featured__item">
						<div class="featured__item__pic set-bg"
						     data-setbg="<?php echo get_template_directory_uri() ?>/img/featured/feature-3.jpg">
							<ul class="featured__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="featured__item__text">
							<h6><a href="#">Crab Pool Security</a></h6>
							<h5>$30.00</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
					<div class="featured__item">
						<div class="featured__item__pic set-bg"
						     data-setbg="<?php echo get_template_directory_uri() ?>/img/featured/feature-4.jpg">
							<ul class="featured__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="featured__item__text">
							<h6><a href="#">Crab Pool Security</a></h6>
							<h5>$30.00</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
					<div class="featured__item">
						<div class="featured__item__pic set-bg"
						     data-setbg="<?php echo get_template_directory_uri() ?>/img/featured/feature-5.jpg">
							<ul class="featured__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="featured__item__text">
							<h6><a href="#">Crab Pool Security</a></h6>
							<h5>$30.00</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
					<div class="featured__item">
						<div class="featured__item__pic set-bg"
						     data-setbg="<?php echo get_template_directory_uri() ?>/img/featured/feature-6.jpg">
							<ul class="featured__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="featured__item__text">
							<h6><a href="#">Crab Pool Security</a></h6>
							<h5>$30.00</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
					<div class="featured__item">
						<div class="featured__item__pic set-bg"
						     data-setbg="<?php echo get_template_directory_uri() ?>/img/featured/feature-7.jpg">
							<ul class="featured__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="featured__item__text">
							<h6><a href="#">Crab Pool Security</a></h6>
							<h5>$30.00</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
					<div class="featured__item">
						<div class="featured__item__pic set-bg"
						     data-setbg="<?php echo get_template_directory_uri() ?>/img/featured/feature-8.jpg">
							<ul class="featured__item__pic__hover">
								<li><a href="#"><i class="fa fa-heart"></i></a></li>
								<li><a href="#"><i class="fa fa-retweet"></i></a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
							</ul>
						</div>
						<div class="featured__item__text">
							<h6><a href="#">Crab Pool Security</a></h6>
							<h5>$30.00</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Featured Section End -->

	<!-- Banner Begin -->
	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="banner__pic">
						<?php
						$home_ads = get_field( 'home_ads', 'option' );
						?>
						<img src="<?php if ( $home_ads['ads_one'] ) {
							echo esc_url( $home_ads['ads_one'] );
						} ?>" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="banner__pic">
						<img src="<?php if ( $home_ads['ads_two'] ) {
							echo esc_url( $home_ads['ads_two'] );
						} ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->

	<!-- Latest Product Section Begin -->
	<section class="latest-product spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="latest-product__text">
						<h4>Latest Products</h4>
						<div class="latest-product__slider owl-carousel">
							<div class="latest-prdouct__slider__item">

								<?php
								$args      = array(
									'post_type'      => 'product',
									'post_status'    => 'publish',
									'posts_per_page' => 3,
								);
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) : $the_query->the_post();


										?>
										<a href="<?php echo get_the_permalink() ?>" class="latest-product__item">
											<div class="latest-product__item__pic">
												<?php echo woocommerce_get_product_thumbnail(); ?>
											</div>
											<div class="latest-product__item__text">
												<h6><?php echo $product->name; ?></h6>
												<span><?php echo $product->get_price_html() ?></span>
											</div>
										</a>
									<?php
									endwhile;
								} else {
									echo __( 'No products found' );
								}
								wp_reset_postdata();
								?>

							</div>
							<div class="latest-prdouct__slider__item">
								<?php
								$args      = array(
									'post_type'      => 'product',
									'post_status'    => 'publish',
									'posts_per_page' => 3,
									'offset'         => 3,
								);
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) : $the_query->the_post();


										?>
										<a href="<?php echo get_the_permalink() ?>" class="latest-product__item">
											<div class="latest-product__item__pic">
												<?php echo woocommerce_get_product_thumbnail(); ?>
											</div>
											<div class="latest-product__item__text">
												<h6><?php echo $product->name; ?></h6>
												<span><?php echo $product->get_price_html() ?></span>
											</div>
										</a>
									<?php
									endwhile;
								} else {
									echo __( 'No products found' );
								}
								wp_reset_postdata();
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="latest-product__text">
						<h4>Top Rated Products</h4>
						<div class="latest-product__slider owl-carousel">
							<div class="latest-prdouct__slider__item">
								<?php
								$args      = array(
									'post_type'      => 'product',
									'post_status'    => 'publish',
									'posts_per_page' => 3,
									'orderby'        => 'meta_value_num',
									'meta_key'       => 'total_sales',
								);
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) : $the_query->the_post();


										?>
										<a href="<?php echo get_the_permalink() ?>" class="latest-product__item">
											<div class="latest-product__item__pic">
												<?php echo woocommerce_get_product_thumbnail(); ?>
											</div>
											<div class="latest-product__item__text">
												<h6><?php echo $product->name; ?></h6>
												<span><?php echo $product->get_price_html() ?></span>
											</div>
										</a>
									<?php
									endwhile;
								} else {
									echo __( 'No products found' );
								}
								wp_reset_postdata();
								?>
							</div>
							<div class="latest-prdouct__slider__item">
								<?php
								$args      = array(
									'post_type'      => 'product',
									'post_status'    => 'publish',
									'posts_per_page' => 3,
									'offset'         => 3,
									'orderby'        => 'meta_value_num',
									'meta_key'       => 'total_sales',
								);
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) : $the_query->the_post();


										?>
										<a href="<?php echo get_the_permalink() ?>" class="latest-product__item">
											<div class="latest-product__item__pic">
												<?php echo woocommerce_get_product_thumbnail(); ?>
											</div>
											<div class="latest-product__item__text">
												<h6><?php echo $product->name; ?></h6>
												<span><?php echo $product->get_price_html() ?></span>
											</div>
										</a>
									<?php
									endwhile;
								} else {
									echo __( 'No products found' );
								}
								wp_reset_postdata();
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="latest-product__text">
						<h4>Review Products</h4>
						<div class="latest-product__slider owl-carousel">
							<div class="latest-prdouct__slider__item">
								<?php
								$args      = array(
									'post_type'      => 'product',
									'post_status'    => 'publish',
									'posts_per_page' => 3,

								);
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) : $the_query->the_post();


										?>
										<a href="<?php echo get_the_permalink() ?>" class="latest-product__item">
											<div class="latest-product__item__pic">
												<?php echo woocommerce_get_product_thumbnail(); ?>
											</div>
											<div class="latest-product__item__text">
												<h6><?php echo $product->name; ?></h6>
												<span><?php echo $product->get_price_html() ?></span>
											</div>
										</a>
									<?php
									endwhile;
								} else {
									echo __( 'No products found' );
								}
								wp_reset_postdata();
								?>
							</div>
							<div class="latest-prdouct__slider__item">
								<?php
								$args      = array(
									'post_type'      => 'product',
									'post_status'    => 'publish',
									'posts_per_page' => 3,
									'offset'         => 3,

								);
								$the_query = new WP_Query( $args );
								if ( $the_query->have_posts() ) {
									while ( $the_query->have_posts() ) : $the_query->the_post();


										?>
										<a href="<?php echo get_the_permalink() ?>" class="latest-product__item">
											<div class="latest-product__item__pic">
												<?php echo woocommerce_get_product_thumbnail(); ?>
											</div>
											<div class="latest-product__item__text">
												<h6><?php echo $product->name; ?></h6>
												<span><?php echo $product->get_price_html() ?></span>
											</div>
										</a>
									<?php
									endwhile;
								} else {
									echo __( 'No products found' );
								}
								wp_reset_postdata();
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Latest Product Section End -->

	<!-- Blog Section Begin -->
	<section class="from-blog spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title from-blog__title">
						<h2>From The Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">

				<?php
				if ( have_posts() ) {
					$args = array(
						'post_type'     => 'post',
						'post_per_page' => 3
					);
					$blog = new WP_Query( $args );
					while ( $blog->have_posts() ) {
						$blog->the_post(); ?>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="blog__item">
								<div class="blog__item__pic">
									<?php the_post_thumbnail(); ?>
								</div>
								<div class="blog__item__text">
									<ul>
										<li><i class="fa fa-calendar-o"></i><?php echo get_the_date()?></li>
										<li><i class="fa fa-comment-o"></i> <?php comments_popup_link( __( 'Leave a comment', 'ogani' ), __( '1 Comment', 'ogani' ), __( '% Comments', 'ogani' ) ); ?></li>
									</ul>
									<h5><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
									<p><?php echo wp_trim_words( get_the_content(), 15, ' ' ) ?></p>
								</div>
							</div>
						</div>
						<?php
					}
				} else {
					echo 'No Post Found';
				}
				?>


			</div>
		</div>
	</section>
	<!-- Blog Section End -->
<?php get_footer() ?>