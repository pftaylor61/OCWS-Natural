<?php
/**
 * The footer for our theme.
 * This template is used to generate the footer for the theme.
 *
 * @package Natural Lite
 * @since Natural Lite 1.0
 */

?>

<div class="clear"></div>

<!-- BEGIN .footer -->
<div class="footer radius-top shadow">

	<?php if ( is_active_sidebar( 'footer' ) ) { ?>

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .footer-widgets -->
		<div class="footer-widgets">

			<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'footer' ) ) : ?>
			<?php endif; ?>

		<!-- END .footer-widgets -->
		</div>

	<!-- END .row -->
	</div>

	<?php } ?>

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .footer-information -->
		<div class="footer-information">

			<!-- BEGIN .footer-content -->
			<div class="footer-content">

				<div class="align-left">
					<?php
						$ocws_theme = wp_get_theme();
						
					?>
					<p><?php esc_html_e( 'Copyright', 'ocws-natural' ); ?> &copy; <?php echo date( esc_html__( 'Y', 'ocws-natural' ) ); ?> &middot; <?php esc_html_e( 'All Rights Reserved', 'ocws-natural' ); ?> &middot; <?php bloginfo( 'name' ); ?></p>

					<p><?php printf( esc_html__( 'Theme: %1$s by %2$s', 'ocws-natural' ), '<a href="'.$ocws_theme->get('ThemeURI').'" target="_blank">'.$ocws_theme->get('Name').'</a>, version '.$ocws_theme->get('Version').', ', '<a href="'.$ocws_theme->get('AuthorURI').'" rel="designer"	target="_blank">'.$ocws_theme->get('Author').'</a>' ); ?> &middot; <?php printf( esc_html__( '(a child theme of: %1$s by %2$s)', 'ocws-natural' ), 'Natural Lite', '<a href="http://organicthemes.com/" rel="designer">Organic Themes</a>' ); ?> &middot; <a href="<?php bloginfo( 'rss2_url' ); ?>"><?php esc_html_e( 'RSS Feed', 'ocws-natural' ); ?></a> &middot; <?php wp_loginout(); ?></p>

				</div>

				<?php if ( has_nav_menu( 'social-menu' ) ) { ?>

				<div class="align-right">

					<?php wp_nav_menu( array(
						'theme_location' => 'social-menu',
						'title_li' => '',
						'depth' => 1,
						'container_class' => 'social-menu',
						'menu_class'      => 'social-icons',
						'link_before'     => '<span>',
						'link_after'      => '</span>',
						)
					); ?>

				</div>

				<?php } ?>

			<!-- END .footer-content -->
			</div>

		<!-- END .footer-information -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .footer -->
</div>

<!-- END .container -->
</div>

<!-- END #wrap -->
</div>

<?php wp_footer(); ?>

</body>
</html>
