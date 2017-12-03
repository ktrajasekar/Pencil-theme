<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Noto+Sans" rel="stylesheet">	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/menucss.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div  canvas="container">
<div class="themeContainer">
<header id="masthead" class="site-header" role="banner">
<div class="container">
<div class="row">
<div class="col-sm-10">
		<div class="site-header-main">
			<div class="site-branding">
				<?php twentysixteen_the_custom_logo(); ?>
				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php endif;
				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

		
		</div><!-- .site-header-main -->

		<?php if ( get_header_image() ) : ?>
			<?php
				/**
				 * Filter the default twentysixteen custom header sizes attribute.
				 *
				 * @since Twenty Sixteen 1.0
				 *
				 * @param string $custom_header_sizes sizes attribute
				 * for Custom Header. Default '(max-width: 709px) 85vw,
				 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
				 */
				$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
			?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div><!-- .header-image -->
		<?php endif; // End header image check. ?>


</div>
<div class="col-sm-2 text-right">
	<a href="javascript:void(0);" class="js-toggle-right-slidebar menutitle"> Menu <img src="<?php bloginfo('template_url'); ?>/images/menu.png" alt="<?php bloginfo('name'); ?>"></a>
</div>
</div>
</div>
</header><!-- .site-header -->
<hr class="bordertitle">

