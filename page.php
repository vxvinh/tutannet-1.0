<?php
/**
 * Theme Page Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
get_header(); ?>

	<?php do_action( 'colormag_before_body_content' ); ?>

  <div class="hidden-sx hidden-sm hidden-md col-lg-1"></div>
	<div id="primary" class="col-sm-12 col-md-8 col-lg-7">
		<div id="content" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					do_action( 'colormag_before_comments_template' );
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
	      		do_action ( 'colormag_after_comments_template' );
				?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

	<?php colormag_sidebar_select(); ?>

	<?php do_action( 'colormag_after_body_content' ); ?>
	<div class="hidden-sx hidden-sm hidden-md col-lg-1"></div>

<?php get_footer(); ?>
