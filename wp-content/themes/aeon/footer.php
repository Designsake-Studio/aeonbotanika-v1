<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aeon
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="footer-columns container wow fadeInUP">
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			<?php endif; ?>
		</div>

		<div class="footer-bottom">
			<div class="container wow fadeIn">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'footer-menu',
				'menu_id'        => 'footer-menu',
			) );
			?>

			<div class="site-info wow fadeIn">
				<div class="socials">
					<a href="https://www.instagram.com/aeonbotanika/" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
					<a href="https://www.facebook.com/aeonbotanika" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/aeonbotanika" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
				</div>
				<?php echo date("Y"); ?> &copy; Aeon Botanika. All Rights Reserved. Website by <a href="http://www.designsakestudio.com">Designsake Studio</a>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
