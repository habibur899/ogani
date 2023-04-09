<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php global $woocommerce; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Page Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
	<div class="humberger__menu__logo">
		<?php
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );
		if ( has_custom_logo() ) {
			echo '<a href="' . esc_url( site_url() ) . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
		} else {
			echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
		}
		?>
	</div>
	<div class="humberger__menu__cart">
		<ul>
			<li><a href="<?php echo esc_url( get_page_link( 274 ) ) ?>"><i class="fa fa-heart"></i> <span>
									<?php
									$count = 0;
									if ( function_exists( 'yith_wcwl_count_products' ) ) {
										echo $count = yith_wcwl_count_products();
									}
									?>
								</span></a></li>
			<li><a href="<?php echo esc_url( wc_get_cart_url() ) ?>"><i class="fa fa-shopping-bag"></i>
					<span><?php

						$total = $woocommerce->cart->cart_contents_count;
						if ( $total ) {
							echo $total;
						} else {
							echo '0';
						}
						?></span></a></li>
		</ul>
		<div class="header__cart__price">item:
			<?php
			$total_amount = $woocommerce->cart->get_cart_total();
			if ( $total_amount ) {
				?>
				<span><?php echo $total_amount; ?></span>
				<?php
			} else {
				echo '0';
			}
			?>
		</div>
	</div>
	<div class="humberger__menu__widget">
		<div class="header__top__right__language">
			<img src="<?php echo get_template_directory_uri() ?>/img/language.png" alt="">
			<div>English</div>
			<span class="arrow_carrot-down"></span>
			<ul>
				<li><a href="#">Spanis</a></li>
				<li><a href="#">English</a></li>
			</ul>
		</div>
		<div class="header__top__right__auth">
			<?php

			if ( is_user_logged_in() ) {
				$current_user = wp_get_current_user();
				echo $current_user->display_name;
			} else {
				?>
				<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>"
				   alt="<?php esc_attr_e( 'Login', 'ogani' ); ?>">
					<?php _e( 'Login', 'ogani' ); ?>
				</a>
				<?php
			}

			?>

		</div>
	</div>
	<nav class="humberger__menu__nav mobile-menu">
		<?php wp_nav_menu( array(
			'theme_location' => 'desktop-menu',
			'walker'         => new WP_Bootstrap_Navwalker(),
		) ) ?>
	</nav>
	<div id="mobile-menu-wrap"></div>
	<div class="header__top__right__social">
		<?php
		$header_socials = get_field( 'social', 'option' );
		if ( $header_socials ):
			foreach ( $header_socials as $header_social ) {
				?>
				<a href="<?php echo esc_url($header_social['link'])?>"><i class="<?php echo esc_attr($header_social['icon'])?>"></i></a>

				<?php
			}
		endif;
		?>
	</div>
	<div class="humberger__menu__contact">
		<ul>
			<li> <?php
				$header_email = get_field( 'email', 'option' );
				if ( $header_email ) {
					echo '<i class="fa fa-envelope"></i>';
					echo $header_email;
				}
				?></li>
			<li> <?php
				$header_message = get_field( 'message', 'option' );
				if ( $header_message ) {
					echo $header_message;
				}
				?></li>
		</ul>
	</div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
	<div class="header__top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="header__top__left">
						<ul>
							<li> <?php
								$header_email = get_field( 'email', 'option' );
								if ( $header_email ) {
									echo '<i class="fa fa-envelope"></i>';
									echo $header_email;
								}
								?></li>
							<li> <?php
								$header_message = get_field( 'message', 'option' );
								if ( $header_message ) {
									echo $header_message;
								}
								?></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="header__top__right">
						<div class="header__top__right__social">
							<?php
							$header_socials = get_field( 'social', 'option' );
							if ( $header_socials ):
								foreach ( $header_socials as $header_social ) {
									?>
									<a href="<?php echo esc_url($header_social['link'])?>"><i class="<?php echo esc_attr($header_social['icon'])?>"></i></a>

									<?php
								}
							endif;
							?>
						</div>
						<div class="header__top__right__language">
							<img src="<?php echo get_template_directory_uri() ?>/img/language.png" alt="">
							<div>English</div>
							<span class="arrow_carrot-down"></span>
							<ul>
								<li><a href="#">Spanis</a></li>
								<li><a href="#">English</a></li>
							</ul>
						</div>
						<div class="header__top__right__auth">
							<?php

							if ( is_user_logged_in() ) {
								$current_user = wp_get_current_user();
								echo $current_user->display_name;
							} else {
								?>
								<a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>"
								   alt="<?php esc_attr_e( 'Login', 'ogani' ); ?>">
									<?php _e( 'Login', 'ogani' ); ?>
								</a>
								<?php
							}

							?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="header__logo">
					<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );
					if ( has_custom_logo() ) {
						echo '<a href="' . esc_url( site_url() ) . '"><img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"></a>';
					} else {
						echo '<h1>' . get_bloginfo( 'name' ) . '</h1>';
					}
					?>
				</div>
			</div>
			<div class="col-lg-6">
				<nav class="header__menu">
					<?php wp_nav_menu( array(
						'theme_location' => 'desktop-menu',
						'walker'         => new WP_Bootstrap_Navwalker(),
					) ) ?>
				</nav>
			</div>
			<div class="col-lg-3">
				<div class="header__cart">
					<ul>
						<li><a href="<?php echo esc_url( get_page_link( 274 ) ) ?>"><i class="fa fa-heart"></i> <span>
									<?php
									$count = 0;
									if ( function_exists( 'yith_wcwl_count_products' ) ) {
										echo $count = yith_wcwl_count_products();
									}
									?>
								</span></a></li>
						<li><a href="<?php echo esc_url( wc_get_cart_url() ) ?>"><i class="fa fa-shopping-bag"></i>
								<span><?php

									$total = $woocommerce->cart->cart_contents_count;
									if ( $total ) {
										echo $total;
									} else {
										echo '0';
									}
									?></span></a></li>
					</ul>
					<div class="header__cart__price">item:
						<?php
						$total_amount = $woocommerce->cart->get_cart_total();
						if ( $total_amount ) {
							?>
							<span><?php echo $total_amount; ?></span>
							<?php
						} else {
							echo '0';
						}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="humberger__open">
			<i class="fa fa-bars"></i>
		</div>
	</div>
</header>
<!-- Header Section End -->
