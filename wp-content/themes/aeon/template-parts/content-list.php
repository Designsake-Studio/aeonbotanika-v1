<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aeon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-list'); ?>>

	<?php aeon_post_thumbnail(); ?>

	<div class="entry-content container">
		<header class="list-entry-header">
	
			<?php if ( 'post' === get_post_type() ) :?>
				<div class="entry-meta">
					<?php the_category(' '); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',	 '</a></h2>' );
			endif;?>
		</header><!-- .entry-header -->

		<?php the_excerpt();?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->