<?php
/**
 * Displays footer site info
 *
 * @package Cinema Movie Director
 * @subpackage cinema_movie_director
 */

?>
<div class="site-info">
  <div class="container">
      <p><?php cinema_movie_director_credit();?> <?php echo esc_html(get_theme_mod('film_maker_lite_footer_text',__('By Themespride','cinema-movie-director'))); ?></p>
  </div>
</div>
