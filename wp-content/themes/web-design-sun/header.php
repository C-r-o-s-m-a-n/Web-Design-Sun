<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name')?></title>
	<meta name="keywords" content=""/>
	<meta name="description" content="<?php bloginfo('description')?>"/>

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
					'container' => 'div',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
				  );
				  wp_nav_menu( $menu_args );
				  ?>
				<a href="<?php echo wc_get_page_permalink('myaccount')?>" class="header-login">
					Login / Register
				</a>
				<div class="header-search">
					<i data-svg="images/icons/search.svg"></i>
				</div>
              	<?php web_design_sun_woocommerce_cart_link()?>
			</header>
		</div>
	</header><!-- .header-->
	<main class="content">