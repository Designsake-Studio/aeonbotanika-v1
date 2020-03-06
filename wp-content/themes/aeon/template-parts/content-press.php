<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aeon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-press-image">
		<a href="<?php the_field('press_link'); ?>" target="_blank">
			<img src="<?php the_field('press_logo'); ?>" alt="<?php the_field('press_title'); ?>">
		</a>
	</div>
	<div class="entry-press-content">
		<h2><a href="<?php the_field('press_link'); ?>" target="_blank"><?php the_field('press_title'); ?></a></h2>
		<?php the_field('press_description'); ?>
	
		<a class="read-more" href="<?php the_field('press_link'); ?>" target="_blank">Read Full Article</a>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
