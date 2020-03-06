<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Aeon
 */

get_header();
?>

	<div id="fullwidth" class="error-404">
		<div class="container">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'aeon' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found on this page.', 'aeon' ); ?>
					<a href="/" class="cta" aria-label="Back To Home">Back To Home</a></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- .container -->
	</div><!-- #fullwidth -->

<?php
get_footer();
