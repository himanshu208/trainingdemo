<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
    
      <div class="col-md-3 col-sm-12 col-lg-3 col-xs-12" align="left">
      <div class="widget"><h2 class="widgettitle"  align="left">Trending</h2>
      <hr class="style10">
			<?php dynamic_sidebar("trendingpost-sidebar");?>
      </div>
      
      <div class="widget"><h2 class="widgettitle"  align="left">Popular</h2>
      <hr class="style10">
			<?php dynamic_sidebar("recentpost-sidebar");?>
      </div></div>