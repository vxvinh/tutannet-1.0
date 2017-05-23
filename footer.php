<?php
/**
 * Theme Footer Section for our theme.
 *
 * Displays all of the footer section and closing of the #main div.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #main -->
   <?php if ( is_active_sidebar('colormag_advertisement_above_the_footer_sidebar') ) { ?>
      <div class="advertisement_above_footer">
         <div class="inner-wrap">
            <?php dynamic_sidebar('colormag_advertisement_above_the_footer_sidebar'); ?>
         </div>
      </div>
   <?php } ?>
	<?php do_action( 'colormag_before_footer' ); ?>
		<footer id="colophon" class="clearfix">
			<div class="container-fluid">
		  	<div class="row">
		      	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		          	<div class="footer-padder">
		              	<h5>Hộp thư điện tử</h5>
		              	<p><a href="mailto:webtutan@gmail.com">webtutan@gmail.com</a></p>
		              </div><!-- .footer-padder -->
		              <div class="footer-padder">
		              	<h5>Số điện thoại</h5>
		              	<p><a>08 3845 8297</a></p>
		             </div><!-- .footer-padder -->
		          </div><!-- .col-lg-4 -->
		          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		          	<div class="footer-padder">
		              </div><!-- .footer-padder -->
		          </div><!-- .col-lg-4 -->
		          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		          	<div class="footer-padder social-links">
		          		<h5>Mạng xã hội</h5>
		              	<?php if( get_theme_mod( 'colormag_social_link_activate', 0 ) == 1 ) { colormag_social_links(); } ?>
		            </div><!-- .social-links -->
		              <div class="footer-padder">
		              	<h5>Địa chỉ</h5>
		                  <p>90/153 Trường&nbsp;Chinh, Phường&nbsp;12, Quận&nbsp;Tân&nbsp;Bình, TP.&nbsp;Hồ&nbsp;Chí&nbsp;Minh</p>
		              </div><!-- .footer-padder -->
		          </div><!-- .col-lg-4 -->
		          <div id="credits" class="col-xs-12">
		      		<?php do_action( 'colormag_footer_copyright' ); ?>
		      		</p>
		      	</div><!-- .col-xs-12 -->
		     	</div><!-- .row -->
		  </div><!-- .container-fluid -->
		</footer>
		<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>
