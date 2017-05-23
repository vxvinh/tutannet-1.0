<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

<section class="no-results not-found">

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'colormag' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php _e( 'Không thấy bài viết bạn đang tìm.', 'colormag' ); ?></h1>
			</header>
			<img class="error-img" src="<?php echo get_template_directory_uri() . '/img/plum.svg'?>">
			<p>Xuân đi trăm hoa rụng</p>
			<p>Xuân đến trăm hoa cười</p>
			<p>Trước mắt việc đi mãi</p>
			<p>Trên đầu, già đến rồi</p>
			<p>Chớ bảo xuân tàn hoa rụng hết</p>
			<p>Đêm qua – sân trước – một cành mai.</p>

		<?php else : ?>

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

</section><!-- .no-results -->
