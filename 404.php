<?php
/**
 * The template for displaying 404 pages (Page Not Found).
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
			<section class="error-404 not-found">
				<div class="page-content">

					<?php if ( ! dynamic_sidebar( 'colormag_error_404_page_sidebar' ) ) : ?>
						<header class="page-header">
							<h1 class="page-title"><?php _e( 'Không thấy trang bạn đang tìm.', 'colormag' ); ?></h1>
						</header>
						<img class="error-img" src="<?php echo get_template_directory_uri() . '/img/plum.svg'?>">
						<p>Xuân đi trăm hoa rụng</p>
						<p>Xuân đến trăm hoa cười</p>
						<p>Trước mắt việc đi mãi</p>
						<p>Trên đầu, già đến rồi</p>
						<p>Chớ bảo xuân tàn hoa rụng hết</p>
						<p>Đêm qua – sân trước – một cành mai.</p>
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</div><!-- #content -->
	</div><!-- #primary -->

	<?php colormag_sidebar_select(); ?>
	<div class="hidden-sx hidden-sm hidden-md col-lg-1"></div>

	<?php do_action( 'colormag_after_body_content' ); ?>

<?php get_footer(); ?>
