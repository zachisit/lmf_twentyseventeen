<?php
/**
* The sidebar containing the main widget area
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package tater
*/
if ( ! is_active_sidebar( 'internal-sidebar' ) ) {
    echo "please set up the sidebar in your theme under 'internal-sidebar'";
}
?>

<aside id="main" class="widget-area" role="complementary">
	<?=do_shortcode('[sidebar_top_cta]')?>
    <?php dynamic_sidebar( 'internal-sidebar' ); ?>
	<?=do_shortcode('[sidebar_bottom_cta]')?>
</aside><!-- #secondary -->