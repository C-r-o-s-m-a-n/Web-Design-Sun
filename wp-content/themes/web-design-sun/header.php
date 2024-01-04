<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name')?></title>
	<meta name="keywords" content=""/>
	<meta name="description" content="<?php bloginfo('description')?>"/>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;1,500&family=Marcellus&display=swap"
		  rel="stylesheet">

  	<?php wp_head()?>
</head>
<body class="wp-front-page" <?php body_class()?>>
<div class="wrapper">
	<header class="header">
		<div class="container">
			<header class="header__wrap">
				<div class="header-logo">
                  <?php the_custom_logo()?>
				</div>
				  <?php  $menu_args = array(
					'theme_location' => 'header_nav',
					'container_class' => 'header-nav',
					'container' => 'nav',
					'items_wrap' => '%3$s'
				  );
				  wp_nav_menu( $menu_args );
				  ?>
				<a href="<?php echo wc_get_page_permalink('myaccount')?>" class="header-login">
					Login / Register
				</a>
				<div class="header-search">
					<i data-svg="images/icons/search.svg"></i>
				</div>
				<div class="header-cart">
					<div class="header-cart-icon">
						<i data-svg="images/icons/cart.svg"></i>
						<div class="header-cart-icon__counter">
							<?php web_design_sun_woocommerce_cart_link()?>
						</div>
					</div>
					<div class="header-cart__total-price">
						$0.00
					</div>
				</div>
			</header>
		</div>
	</header><!-- .header-->
	<main class="content">