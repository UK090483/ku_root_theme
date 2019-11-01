<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jmh
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
			<?php
				if (is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3')): 
				
				$footerwidget_height_small = esc_attr(get_theme_mod('jmh_footerwidget_height_small','50'));
				$footerwidget_height_big = esc_attr(get_theme_mod('jmh_footerwidget_height_big','50'));
				$footerwidget_activate = esc_attr(get_theme_mod('jmh_footerwidget_activate_alignment','center'))? 'footer-widget-alignment-active ' :'' ;
				$footerwidget_align_small_1 = esc_attr(get_theme_mod('jmh_footerwidget_align_small_1','center'));
				$footerwidget_align_big_1 = esc_attr(get_theme_mod('jmh_footerwidget_align_big_1','center'));
				$footerwidget_align_small_2 = esc_attr(get_theme_mod('jmh_footerwidget_align_small_2','center'));
				$footerwidget_align_big_2 = esc_attr(get_theme_mod('jmh_footerwidget_align_big_2','center'));
				$footerwidget_align_small_3 = esc_attr(get_theme_mod('jmh_footerwidget_align_small_3','center'));
				$footerwidget_align_big_3 = esc_attr(get_theme_mod('jmh_footerwidget_align_big_3','center'));	


				 
				$wrap_css ='<style type="text/css">
				.footer-widget-column{ min-height: '.$footerwidget_height_small. 'px;}
				@media (min-width: 768px) {
				  .footer-widget-column{ min-height: '.$footerwidget_height_big. 'px;}
				}
				</style>';
			?>
		 <?php echo $wrap_css; ?> 
				<div class="footer-widgets-wrap container <?php echo $footerwidget_activate?>" >

					

						<div class="footer-widget-column jmh-footerwidget-align-small-<?php echo $footerwidget_align_small_1?> jmh-footerwidget-align-big-<?php echo $footerwidget_align_big_1?>" >
							<?php if (is_active_sidebar('footer-1')): ?>
								<?php dynamic_sidebar('footer-1');?>
							<?php endif;?>
						</div>

						
						<div class="footer-widget-column jmh-footerwidget-align-small-<?php echo $footerwidget_align_small_2?> jmh-footerwidget-align-big-<?php echo $footerwidget_align_big_2?>" >
							<?php if (is_active_sidebar('footer-2')): ?>
								<?php dynamic_sidebar('footer-2');?>
							<?php endif;?>
						</div>

						<div class="footer-widget-column jmh-footerwidget-align-small-<?php echo $footerwidget_align_small_3?> jmh-footerwidget-align-big-<?php echo $footerwidget_align_big_3?>" >
							<?php if (is_active_sidebar('footer-3')): ?>
								<?php dynamic_sidebar('footer-3');?>
							<?php endif;?>
						</div>


				


				</div><!-- footer-widgets-wrap -->
			<?php endif;?>
		

		<div class="site-info container">
				<?php
					if (function_exists('the_privacy_policy_link')) {
						the_privacy_policy_link('<div class="flex-center footer-privacy-policy-link-wrapper">', '</div>');
					}
				?>

				<?php $blog_info = get_bloginfo('name');?>
				<?php if (!empty($blog_info)): ?>
					<div class="flex-center footer-site-name" >&copy <?php bloginfo('name');?></div>
				<?php endif;?>
			
		</div><!-- .site-info -->	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
