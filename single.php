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

	<!-- Blog Details Hero Begin -->
	<section class="blog-details-hero set-bg"
	         data-setbg="<?php echo get_template_directory_uri(); ?>/img/blog/details/details-hero.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="blog__details__hero__text">
						<h2><?php the_title() ?></h2>
						<ul>
							<li>By <?php
								global $post;
								$author_id = $post->post_author;
								echo get_the_author_meta( 'display_name', $author_id ) ?></li>
							<li><?php echo get_the_date() ?></li>
							<li><?php comments_number(); ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Details Hero End -->

	<!-- Blog Details Section Begin -->
	<section class="blog-details spad">
		<div class="container">
			<div class="row">
				<?php get_sidebar() ?>
				<div class="col-lg-8 col-md-7 order-md-1 order-1">
					<div class="blog__details__text">
						<?php the_post_thumbnail(); ?>
						<p><?php the_content(); ?></p>
					</div>
					<div class="blog__details__content">
						<div class="row">
							<div class="col-lg-6">
								<div class="blog__details__author">
									<div class="blog__details__author__pic">

										<?php
										$avatar = wp_get_current_user();
										?>
										<img src="<?php echo esc_url( get_avatar_url( $avatar->ID ) ) ?>" alt="">
									</div>
									<div class="blog__details__author__text">
										<h6><?php echo get_the_author_meta( 'display_name', $author_id ); ?></h6>
										<span><?php
											$user = new WP_User( $author_id );

											if ( ! empty( $user->roles ) && is_array( $user->roles ) ) {
												foreach ( $user->roles as $role ) {
													echo $role;
												}
											}
											?></span>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="blog__details__widget">
									<ul>
										<li><span>Categories:</span>
											<?php
											$cats = get_categories();
											foreach ( $cats as $cat ) {
												echo $cat->name . ', ';
											}
											?>
										</li>
										<li><span>Tags:</span> <?php

											$posttags = get_the_tags();
											if ( $posttags ) {
												foreach ( $posttags as $tag ) {
													echo $tag->name . ', ';
												}
											}
											?>

										</li>
									</ul>
									<div class="blog__details__social">

										<a href="https://www.facebook.com/sharer/sharer.php?u=<?= get_permalink(); ?>"
										   target="_blank"><i class="fab fa-facebook"></i></a>

										<a href="https://www.twitter.com/share?url=<?= get_permalink(); ?>&text=<?= get_the_title(); ?>"
										   target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>

										<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?= get_permalink(); ?>"
										   target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a>

										<a href="mailto:?subject=<?= get_the_title(); ?> - <?= site_url(); ?>&body=I found this post on <?= site_url(); ?> and thought it would interest you.%0D%0A%0D%0A<?= get_the_title(); ?>%0D%0A<?= get_permalink(); ?>"
										   target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Details Section End -->

	<!-- Related Blog Section Begin -->
	<section class="related-blog spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title related-blog-title">
						<h2>Post You May Like</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<?php
				$related_posts = get_field( 'related_post' );
				if ( $related_posts ) {
					foreach ( $related_posts as $related_post ) {

						?>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="blog__item">
								<div class="blog__item__pic">
									<img src="<?php echo get_the_post_thumbnail_url( $related_post->ID ); ?>" alt="">

								</div>
								<div class="blog__item__text">
									<ul>
										<li>
											<i class="fa fa-calendar-o"></i> <?php echo esc_html( $related_post->post_date ) ?>
										</li>
										<li>
											<i class="fa fa-comment-o"></i> <?php echo esc_html( $related_post->comment_count ) ?>
										</li>
									</ul>
									<h5>
										<a href="<?php echo esc_url( $related_post->guid ) ?>"><?php echo esc_html( $related_post->post_title ) ?></a>
									</h5>
									<p><?php echo wp_trim_words( $related_post->post_content, 15, ' ' );
										?></p>
								</div>
							</div>
						</div>
						<?php
					}
				}
				?>


			</div>
		</div>
	</section>
	<!-- Related Blog Section End -->
<?php get_footer() ?>