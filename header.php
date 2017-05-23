<?php
/**
 * Theme Header Section for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main" class="clearfix"> <div class="inner-wrap">
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
/**
 * This hook is important for wordpress plugins and other many things
 */
wp_head();
?>
</head>

<body <?php body_class(); ?>>
<?php	do_action( 'colormag_before' ); ?>
<div id="page" class="hfeed site container-fluid">
	<?php do_action( 'colormag_before_header' ); ?>
	<header id="masthead" class="site-header clearfix row">
		<div id="header-text-nav-container" class="clearfix">
			<div class="header-text-inner-wrap" style="background-image: url(<?php echo get_template_directory_uri() . '/img/Ben-thuong.svg'?>);" alt="<?php echo( get_bloginfo( 'title' ) ); ?>)">

				<div id="header-text-nav-wrap" class="clearfix">
					<div id="header-left-section">
						<?php
						if((get_theme_mod('colormag_header_logo_placement', 'header_text_only') == 'show_both' || get_theme_mod('colormag_header_logo_placement', 'header_text_only') == 'header_logo_only')) {
						?>
							<div id="header-logo-image">
								<?php if (get_theme_mod('colormag_logo', '') != '') { ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url(get_theme_mod('colormag_logo')); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
								<?php } ?>

								<?php if (function_exists('the_custom_logo') && has_custom_logo( $blog_id = 0 )) {
									colormag_the_custom_logo();
								} ?>
							</div><!-- #header-logo-image -->
						<?php
						}
                  $screen_reader = '';
                  if ( get_theme_mod( 'colormag_header_logo_placement', 'header_text_only' ) == 'header_logo_only' || (get_theme_mod( 'colormag_header_logo_placement', 'header_text_only' ) == 'disable' )) {
                     $screen_reader = 'screen-reader-text';
                  }
						?>
						<div id="header-text" class="<?php echo $screen_reader; ?>">
									<div class="row">
										<div class="col-xs-1"></div>
										<div class="col-xs-10">
											<?php if ( is_front_page() || is_home() ) : ?>
												<h1 id="site-title">
				   								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Chùa Từ&nbsp;Tân</a>
				   							</h1>
				                     <?php else : ?>
				                        <h3 id="site-title">
				                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				                        </h3>
											<?php endif; ?>
											<?php if ( get_theme_mod( 'colormag_date_display', 0 ) == 1 ) { ?>
												 <?php colormag_date_display(); ?>
											<?php } ?>
										</div>
										<div class="col-xs-1">

									</div><!-- .row site-title -->
						</div><!-- #header-text -->
					</div><!-- #header-left-section -->
					<div id="header-right-section">
						<?php
						if( is_active_sidebar( 'colormag_header_sidebar' ) ) {
						?>
						<div id="header-right-sidebar" class="clearfix">
						<?php
							// Calling the header sidebar if it exists.
							if ( !dynamic_sidebar( 'colormag_header_sidebar' ) ):
							endif;
						?>
						</div>
						<?php
						}
						?>
			    	</div><!-- #header-right-section -->

			   </div><!-- #header-text-nav-wrap -->

			</div><!-- .inner-wrap -->
			<div id="site-today" class="row">
				<div class="col-xs-3"></div>
				<div class="col-xs-6" style="text-align: center;">
					<?php if ( get_theme_mod( 'colormag_breaking_news', 0 ) == 1 ) { ?>
						 <?php colormag_breaking_news(); ?>
					<?php } ?>
				</div>
				<div class="col-xs-3">

				</div>
			</div><!-- .row -->

			<nav id="site-navigation" class="main-navigation clearfix" role="navigation">
				<div class="search-form-top">
					 <?php get_search_form(); ?>
				</div>
				<div class="container-fluid">
					<?php
               if ( get_theme_mod( 'colormag_home_icon_display', 0 ) == 1 ) {
                  if ( is_front_page() ) {
                     $home_icon_class = 'home-icon front_page_on';
                  } else {
                     $home_icon_class = 'home-icon';
                  }
                  ?>
                  <div class="<?php echo $home_icon_class; ?> hidden-xs hidden-sm hidden-md hidden-lg">
                     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php echo get_template_directory_uri() . '/img/lotus-logo.svg'?>"></a>
                  </div>
                  <?php
               }
               ?>
               <h4 class="menu-toggle"></h4>
               <?php
               if ( has_nav_menu( 'primary' ) ) {
                  wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-primary-container col-sm-12 col-md-12 col-lg-12', 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>' ) );
               }
					else {
						wp_page_menu();
					}
					?>
							<div class="toolbar-container hidden-xs hidden-sm hidden-md hidden-lg">
								<?php if ( get_theme_mod( 'tutannet_search_icon_in_menu', 0 ) == 1 ) { ?>
                   <?php tutannet_search_icon(); ?>
                <?php } ?>
								<?php if ( get_theme_mod( 'colormag_random_post_in_menu', 0 ) == 1 ) { ?>
                   <?php colormag_random_post(); ?>
                <?php } ?>
								<?php if ( get_theme_mod( 'tutannet_calendar_icon_in_menu', 0 ) == 1 ) { ?>
                   <?php tutannet_calendar_icon(); ?>
                <?php } ?>
								<?php if ( get_theme_mod( 'tutannet_user_icon_in_menu', 0 ) == 1 ) { ?>
                   <?php tutannet_user_icon(); ?>
                <?php } ?>
							</div>

				</div>
			</nav>

		</div><!-- #header-text-nav-container -->

	</header>
	<?php do_action( 'colormag_after_header' ); ?>
	<?php do_action( 'colormag_before_main' ); ?>
	<div id="main" class="clearfix container-fluid row">
		<div class="row">
