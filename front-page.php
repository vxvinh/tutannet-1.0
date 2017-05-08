<?php
/**
 * Template to show the front page.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
get_header(); ?>

   </div>
   <div class="main-content-section clearfix">
      <div class="hidden-sx hidden-sm hidden-md col-lg-1"></div>
      <div id="primary" class="col-sm-12 col-md-8 col-lg-7">
         <div id="content" class="clearfix">

           <div class="front-page-top-section clearfix">
              <div class="widget_slider_area">
                 <?php
                 if( is_active_sidebar( 'colormag_front_page_slider_area' ) ) {
                    if ( !dynamic_sidebar( 'colormag_front_page_slider_area' ) ):
                    endif;
                 }
                 ?>
              </div>
            </div>

         <?php
         if( is_active_sidebar( 'colormag_front_page_content_top_section' ) ) {
            if ( !dynamic_sidebar( 'colormag_front_page_content_top_section' ) ):
            endif;
         }

         if( is_active_sidebar( 'colormag_front_page_content_middle_left_section' ) || is_active_sidebar( 'colormag_front_page_content_middle_right_section' )) {
         ?>
            <div class="tg-one-half">
               <?php
               if ( !dynamic_sidebar( 'colormag_front_page_content_middle_left_section' ) ):
               endif;
               ?>
            </div>
            <div class="tg-one-half tg-one-half-last">
               <?php
               if ( !dynamic_sidebar( 'colormag_front_page_content_middle_right_section' ) ):
               endif;
               ?>
            </div>
         <div class="clearfix"></div>
         <?php
         }
         if( is_active_sidebar( 'colormag_front_page_content_bottom_section' ) ) {
            if ( !dynamic_sidebar( 'colormag_front_page_content_bottom_section' ) ):
            endif;
         }
         if (get_theme_mod('colormag_hide_blog_front', 0) == 0): ?>

            <div class="article-container">
               <?php if ( have_posts() ) : ?>

                  <?php while ( have_posts() ) : the_post(); ?>

                     <?php
                     if ( is_front_page() && is_home() ) {
                       get_template_part( 'content', '' );
                     } elseif ( is_front_page() ) {
                       get_template_part( 'content', 'page' );
                     }
                     ?>

                  <?php endwhile; ?>

                  <?php get_template_part( 'navigation', 'none' ); ?>

               <?php else : ?>

                  <?php get_template_part( 'no-results', 'none' ); ?>

               <?php endif; ?>
            </div>
         <?php endif; ?>
       </div>
      </div>
      <?php colormag_sidebar_select(); ?>
      <div class="hidden-xs hidden-sm hidden-md col-lg-1"></div>


<?php get_footer(); ?>
