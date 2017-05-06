<?php
/**
 * Displays the searchform of the theme.
 *
 * @package ThemeGrill
 * @subpackage ColorMag
 * @since ColorMag 1.0
 */
?>
<form action="<?php echo esc_url( home_url( '/' ) ); ?>" class="search-form searchform clearfix" method="get">
   <div class="search-wrap">
    <h4>Tìm bài viết theo <strong>từ khóa</strong></h4>
    <input type="text" class="s field" name="s">
    <button class="search-icon" type="submit">Tìm bài viết</button>
   </div>
</form><!-- .searchform -->

<?php
  $tags = get_tags();
  $html = '<div class="tags-wrap clearfix">';
  $html .= '<h4>Tìm bài viết theo <strong>tên thẻ</strong></h4>';
  $html .= '<div class="tag-list">';
  foreach ( $tags as $tag ) {
  	$tag_link = get_tag_link( $tag->term_id );

  	$html .= "<a href='{$tag_link}' title='{$tag->name}' class='{$tag->slug}'>";
  	$html .= "{$tag->name}</a>";
  }
  $html .= '</div>';
  $html .= '</div>';
  echo $html;
?>
